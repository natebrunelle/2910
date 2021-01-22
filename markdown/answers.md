---
title: Students who want "the answer"
...

Sometimes you'll encounter a students whose goal appears to be to get you to tell them the answer to an assignment.

# Why this happens

This problem is unusually prevalent in CS courses because so much of CS has graded assignments that are also learning activities, and thus on which students may seek TA help.
We could spend a whole course on why this is prevalent in CS and what the alternatives are, but from the perspective of the TA the key point is:

> It is common for TAs to be expected to draw a line between
>
> - appropriate questions about the learning activity part of the assignment, and
> - inappropriate questions about the assessment part of the assignment.

This can be tricky, but probably wouldn't be that bad if no TA ever knowingly gave away an answer to the assessment.
But TAs do, because of another important truth:

> Teaching is hard.

Teaching is harder than doing.
Because of that, doing often becomes a default,
in the `switch`-statement sense of the word:
we try all the teaching `case`s we know of
and if none of them work we `default` to showing them the answer in hopes they'll learn from seeing it.
And they may well learn from seeing it,
but they also bypass the assessment so we have trouble knowing how much they learned.

Also because teaching is hard
we often default to doing if we are tired, rushed, or otherwise less able to spend the time and energy on teaching.

# The Rookie Mistake

There is one mistake that I've observed that most if not all new TAs (and professors) make,
and that is so appealing even seasoned educators sometimes make again,
is the instinct to help them get past where they're stuck.

This mistake is so appealing because it makes intuitive sense.
When someone is working on a problem but not making progress
it is natural to identify the next thing to be done
and explain how to do that so they can resume making progress.
And to the degree that they might be stuck because they've encountered a step dependent on a concept they did not fully grasp, this can make sense.

However, an unintended consequence of this instinct is that a student with access to a few TAs can slowly get the entire solution
by showing one TA after another that they've made progress and just need the next step,
gradually collecting all of the steps and thus the full solution.

## Roadmap, not steps

One way to avoid this mistake was alluded to when we discussed [cognitive overload](clt-ta.html#managing-cognitive-overload):
instead of showing them any steps, try to show them how to break the overall task
into smaller chunks so that thy can fit an entire chunk in working memory and make progress on it.
This can work well sometimes, but does not help if the problem is not overload but rather misunderstanding.

## Separate learning and assessing exercises

Because of the scale of our assignments,
it is uncommon for CS to offer completely separate learning assignments and assessment assignments
the way that (for example) math courses often do, with minimal-weight homework where TAs may help
and bulk-of-points exams asking the same type of questions without help.
However, that separation is good pedagogical practice and TAs can often benefit from creating smaller versions of it.

The basic strategy here is to observe what a student is stuck on and then to have them work on a separate task that exercises the same knowledge and skills as that step would.
Because the task is separate, there is no limitation on how you can teach it;
you can even show them the answer if other teaching techniques don't succeed
without risking invalidating the assessment.
Once they complete the learning task (or several if the schemata need to be more fully reinforced), they can then return to the assessment activity with an understanding of how they can proceed.

Creating such learning tasks can be challenging, and can benefit from the collaboration of other TAs.
It is always a good idea to ask your fellow TAs what example problems they use to help students learn various concepts.

# Six tricks to not give away answers

## Ask questions

We have [a full writeup](socratic.html) on the pedagogical technique of only asking questions.
One of its many advantages is that it is very uncommon to give out answers when all you do is ask questions.

## Force them to act

This technique is simple: give the students something to do 
which is not itself part of the assignment
and wait for them to do it.
This can be drawing a picture, writing something down, looking something up, explaining to you what was in lecture of the reading, etc.

The benefits of this technique are numerous.
It can help lazy, rushed, or tired students realize that you are not going to save them from putting in effort.
It can help you understand what concepts they have not fully learned as you watch how they do the task.
It can provide a non-assignment structure in which to teach assignment-relevant concepts.
It can teach them cognitive tools they can use to solve their own problems in the future.
It can get their minds from "I'm stuck" mode to "I'm being successful" mode, reducing self-distraction extraneous load.
And, it is almost guaranteed not to give away the answer.

## Look at your part of the problem

Eyes communicate attention.
Every person involved in a tutoring situation should be looking at their part of the task.
For the student, that is likely the code, problem, worksheet, etc.
For the TA, that is almost always the student.

I am continually surprised at the positive effect
of the moment is when a student turns their computer toward me so I can see their code and I continue to look at their face, not their code.
It reminds me of my [true priorities](respond.html#priority-manipulation);
it communicates to the student that I want to know more about them;
and it helps me avoid leaping to conclusions and use the Socratic method and other effective teaching tools.

## Say "No"

When a student asks for the answer, say no.
Say it clearly and simply.

- "I'm not going to answer that question"
- "That's what the assignment is asking you"
- "Great question; what's the answer?"

Avoid the temptation to soften the blow with words like "that's a little too close to the assignment problem statement," as that kind of softness can be an invitation to try similar questions until one that is nearly "the answer" can be found.

## Wait for a question

Often answer-seeking students will state a problem instead of asking a question.
The implication is that their problem is your problem,
when in fact their problem is the assignment
while your problem is their misunderstanding.

I recommend using the phrases "that sounds difficult; what can I help you with?"
and "what's your question?" to help focus students.
Often it takes a few tries to get a question,
and the first question after this may still not be good learning questions:

- "Can you help me?" ("I hope so; what help do you need?")
- "Can you fix it?" ("that's your task, I'm afraid; is there something I can help you with?")
- "Can you help me fix it?" ("what help do you need?")
- "How can I fix it?" ("many ways, probably. Is there a question I can help you with?")

Obviously you shouldn't keep at this forever;
if after a few rounds they've not come up with a question about a course topic^[
    Note that course topics vary a lot by course.
    In introduction to programming "why doesn't my code work" may be in scope
    because why code works is the topic.
    In an 4th-year elective, the same question is almost certainly out of scope
    and should be refined by the student to a topical question.
]
it's appropriate to say something like "why don't I come back once you have a question?"

## Don't become an Oracle

In theoretical computation we discuss the idea of Oracle machines
where a machine is given access to a magical device called an oracle
that can answer yes/no questions with perfect accuracy in no time.

Don't become an Oracle machine for your students.
Students often ask yes/no questions that have the effect
of halving the search-space for correct answers,
like "am I on the right track?" and "is this answer correct?"
Avoid answering them.
I recommend answers like "great question; how could you find out the answer?"
and "I'll grade your assignment exactly once: do you want it now or after your turn it in?"

If your class is organized in a way that prompts a lot of these kinds of questions,
it is also worth practicing your deadpan;
students can often tell the answer by your facial expression when they ask the question so learning to react the same, right or wrong, can be an asset.
