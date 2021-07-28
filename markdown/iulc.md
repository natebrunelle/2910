---
title: Helping Others Debug
...

# I Use Loud Cheering

How do you help a student debug their code?

I use loud cheering. "Woohoo! You found a bug! Yipee! You can fix it! Go, team go!"

I don't actually do that.
Being a cheerleader valuable: facing bugs can be discouraging; but when I cheer students on I rarely go for "loud".
Rather, "**I** **U**se **L**oud **C**heering is a mnemonic to help you remember four steps in good TA-assisted debugging:
**I**dentify, **U**nderstand, **L**ocate, **C**hange.

# Identify

Step one it to help the student identify the error.
This starts by asking questions like "what's it doing wrong?" or "how do you know it doesn't work?"
Because students are often more focused on solutions than problems, initial answers are often vague and imprecise and a few follow-up questions are needed.

The goal at the end of the identify step if for the student to be able to clearly state a difference between what their code does and what they intended it to do.

Keep this scoped to their stage of development: "I haven't added feature $X$" is not a debugging problem, it's a design problem, and should be addressed at a design level (which usually means without looking at their code code).

# Understand

Once the student is able to clearly articulate the bug,
and before you begin fixing it,
make sure the student understands what their own code does.
Remember, the assignment is based on something they are learning
meaning their schemata about that newly-learned material are still developing.
If this step is just review, their schemata get stronger from that review.
If it reveals gaps in understanding, those gaps need to be filled in before there is any hope of them understanding how to fix their bug.

How to check understanding varies to some degree by the level of the class.

At an introductory level, it's usually a good idea to keep the context small: "I notice you have a variable named `x`; what does that store?" or "which line of code is the first one you're not sure you got right?"
If they seem uncertain, it can be useful to role-play the computer with them, making sure they understand what you'd need to do to obey each line of code.

Later in a student's learning the components of understanding get bigger.
I find two broad strategies work well for me when teaching upper-level electives:
asking them where in their code they've implemented some high-level topic discussed in class or the writeup ("where do you handle the zig-zig case?")
and picking some untidy code region and asking for an explanation ("these five lines look very similar; what's going on here?").

The understand step has one of two outcomes.
If you learn that they don't understand what they are doing (or have rushed past design directly to code and confused themselves in the process), don't confuse them further by discussing the bug: refocus them on the basics.
If they do understand what they are doing, move on to the next step.

# Locate

To fix a bug, the student needs to know the source of the problem.
Typically the identify step led to them articulating a *symptom* of the problem;
it's now time to help them diagnose the *cause*.

Often, you'll find that locating the bug to be much easier than they do.
But (with rare exceptions), that's not your job.
Refrain from the temptation of saying "it's probably in your $x$ method" or the like.
You are teaching them how to locate their own bugs, not debugging for them.

:::rule
Help the student locate their own bug; don't locate it for them.
:::

Whether using a debugger, print statements, or check-by-hand, the process of locating bugs is the same.
The student needs to

1. Pick some point on the code path to the symptom.

2. Describe what the code is supposed to be doing there, often by saying what value some set of variables should have.

3. Check to see whether it's doing what was expected.
    
    If it isn't, double-check the expectation: either the program or the programmer could be in error.

4. Based on the result, narrow the region of code that could have led to the bug and repeat.

In my experience, the main task of a teacher in helping students locate bugs
is to keep them going around this loop even when they want to stop.
They may be some better system than this loop, but in two decades of debugging my own code and helping students debug theirs, I've never found it.
With experience I've gotten better at each step:
I generally pick points closer to the actual bug the first time,
can more easily describe expected results,
and am better at performing the check;
but the process remains the same.



# Change

Once the bug is localized, the student needs to fix it.

Sometimes this is a simple fix to the code at that location.
But there are two common classes of bugs that require more nuance.

The first is the "missing component" bug,
where the location was supposed to do something
but the information needed to do that thing is not available in the code.
The change  to fix this involves figuring out what is missing,
finding when and where it was available,
and coming up with a data path to get it to the place where it is needed.

The second is the "aliased meaning" bug, often caused by poor variable naming,
where the same variable is used to store different content at different points in the program.
Fixing this involves all of the complexities of a missing component,
plus going through every point in the code where the overloaded variable was used
and making sure the correct location is used there.

When the change is more than a few trivial steps,
encourage the student to take it slowly with multiple rounds of testing.
Collect the data needed, then test to make sure that didn't break anything.
Then test again to verify that the data collected is the right data.
Then make the change to use the new data and test again.
Testing often is always a good move,
but particularly in debugging when their attention is scattered across multiple locations in code that they no longer have fresh in their memory.
