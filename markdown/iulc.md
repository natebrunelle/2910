---
title: Helping Others Debug
...

# I Use Loud Cheering

How do you help a student debug their code?

I use loud cheering. "Woohoo! You found a bug! Yipee! You can fix it! Go, team go!"

I suppose I don't always use *loud* cheering.
But facing bugs can be discouraging, and cheering works, so cheer on your students!

That said, the reason I say "**I** **U**se **L**oud **C**heering"
is as a mnemonic to help you remember four additional steps that should accompany cheering when assisting student debugging:
**I**dentify, **U**nderstand, **L**ocate, **C**hange.

# Identify

Step one it to help the student identify the error.
This starts by asking questions like "what's it doing wrong?" or "how do you know it doesn't work?"
Because students are often more focused on solutions than problems, initial answers are often vague and imprecise and a few follow-up questions are needed.

The goal at the end of the identify step if for the student to be able to clearly state a difference between what their code does and what they intended it to do.

Keep this scoped to their stage of development: "I haven't added feature $X$" is not a debugging problem, it's a design problem, and should be addressed at a design level (which usually means without looking at their code).

# Understand

Once the student is able to clearly articulate the bug,
and before they begin fixing it,
make sure the student understands what their own code does.
Remember, the assignment is based on something they are learning,
meaning their schemata about that newly-learned material are still developing.
If this step shows they do understand, their schemata get stronger from that review.
If it reveals gaps in understanding, those gaps need to be filled in before there is any hope of them understanding how to fix their bug.

How to check understanding varies to some degree by the level of the class.

At an introductory level, it's usually a good idea to keep the context small: "I notice you have a variable named `x`; what does that store?" or "which line of code is the first one you're not sure you got right?"
If they seem uncertain, it can be useful to role-play the computer with them, making sure they understand which line follows which other and what you'd need to do to obey each line of code.

Later in a student's learning the components of understanding get bigger.
I find two broad strategies work well for me when teaching upper-level electives:
asking them where in their code they've implemented some high-level topic discussed in class or the writeup ("where do you handle the zig-zig case?")
and picking some untidy code region and asking for an explanation ("these five lines look very similar; what's going on here?").

The understand step has one of two outcomes.
If you learn that they don't understand what they are doing (or have rushed past design directly to code and confused themselves in the process), don't confuse them further by discussing the bug: refocus them on the basics
(assuring them that doing so will fix the current bug and prevent future bugs as well).
If they do understand what they are doing, move on to the next step.

# Locate

To fix a bug, the student needs to know the source of the problem.
Typically the identify step led to them articulating a *symptom* of the problem;
it's now time to help them diagnose the *cause*.

Often (though not always^[I've been helping students debug for 18 years and they still sometimes create bugs that I've never seen before, even in introductory classes.]), you'll find locating the bug is easier for you than for them.
But (with rare exceptions^[The most common exception is when the bug is outside their ability to understand at their state of learning. Example bugs you might need to find and fix for them including accidentally overriding a library method, exhausting system resources, misconfiguring IDEs and other tools, and stumbling across a topic that will be introduced in a later course.]), that's not your job.
Refrain from the temptation of saying "it's probably in your $x$ method" or the like.
You are teaching them how to locate their own bugs, not debugging for them.

:::rule
Help the student locate their own bug; don't locate it for them.
:::

Whether using a debugger, print statements, inspection, or check-by-hand, the process of locating bugs is the same.
The *student* needs to

1. Pick some point on the code path to the symptom.

2. Describe what the code is supposed to be doing there, often by identifying what values the in-scope variables should have.

3. Check to see whether it's doing what was expected.
    
    If it isn't, double-check the expectation: the program could be wrong, but so could the programmer's expectation.

4. Based on the result, narrow the region of code that could have led to the bug and repeat.
    If it's right there, look closer to the symptom;
    if it's wrong there, look earlier to see where it started being wrong.

In my experience, the main task of a teacher in helping students locate bugs
is to keep them going around this loop even when they want to stop.
There may be some better system than this loop, but in two decades of debugging my own code and helping students debug theirs, I've never found it.
With experience I've gotten better at each step:
My schemata are better at picking points closer to the actual bug the first time,
can more easily describe expected results,
and are better at performing the checks;
but the process remains the same.



# Change

Once the bug is localized, the student needs to fix it.

Sometimes this is a change to the code at that location.
But there are two common classes of bugs that require changes in other locations.

The first nonlocal case is the "missing component" bug,
where the location identified in the previous step
should do something that depends on data not available at that location.
Fixing this involves figuring out what data is missing,
finding when and where it was available,
and designing and implementing a data path to get it to the place where it is needed.
Data paths can be as simple as a single variable or as complicated as multiple new data structures and function parameters.
In a few cases the changes might be so significant that it's easier to start over with a better design.

The second nonlocal case is the "aliased meaning" bug, often caused by poor variable naming,
where the same variable is used to store different content at different points in the program.
This case has most of a missing component: the student needs to add a new data path to transmit both content simultaneously.
It additionally requires revisiting each use of the old overloaded variable
and deciding which meaning was intended there.

When the change is more than a few trivial steps,
encourage the student to take it slowly with multiple rounds of intermediate testing.
If one part of a multi-part change doesn't work, it can be hard to tell which part failed unless each was added and tested individually.
Additionally, debugging generally involves modifying code that is no longer fresh in the students' mind, so it will take more thought and time to fix that it did to write the first time, further reinforcing small, careful steps as the best approach.
