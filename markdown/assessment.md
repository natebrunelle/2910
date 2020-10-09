---
title: Why Grading is Hard
...

In software engineering we discuss the task of **requirements elicitation**:
that is, trying to figure out what the client actually wants.
Most people---even those who have written software themselves---find it far easier to look at a software product and say "that's not right"
than to sit down with a developer and explain what they want.

Although I am unaware of formal studies to back this up,
my experience suggests this is also true of instructors and grading.
Instructors can generally tell a TA they graded wrong,
but generally find it difficult to explain to the TA
how they are supposed to grade so that future grades are right.

At least in part, that difficulty is caused by instructors having a wide variety of goals they hope each assessment and grading system will achieve; goals that are often in conflict with one another.

# Goals in Assessments

Assessments, by which we mean anything students do that will be graded, can be categorized by their purpose as follows:

Summative Assessments
:   This is what most students think of when they think of graded work:
    a effort on the part of the instructor to determine how much each student has learned.

Formative Assessments
:   Assessments can also be a valuable part of the teach process;
    they can 
    
    - add student experience to other aspects of instruction,
    - confirm and reinforce learned concepts,
    - help students identify misconceptions and where they should focus their future learning.
    
Assessments as Motivation
:   By the time students reach university, they have more than a decade of reinforcement to be motivated by grades.
    Hence, grades are a powerful motivator: for better or for worse, telling students they get a few points for doing something has more impact on most students' behavior
    than telling them that doing it will have a large positive impact on their learning.
    
    Because of this, assessments are used to signal proper student motivation,
    with some assessments created for no other purpose than to encourage activity
    and point weights used to indicate relative importance of topics.

Assessments as Instructor Guidance
:   Instructors have various mechanisms for learning how the course is going and what they need to focus on next;
    one of those mechanisms is assessments.
    Unlike most other mechanisms, assessments (typically) reach all students rather than just the most vocal or otherwise most engaged.

It is typical for an instructor to want to use assessments for all four of these purposes,
and to want to minimize the number of assessments they need to create, students need to take, and course staff need grade.
Hence, it is common to try to use the same assessment for several of the above goals simultaneously.
Because each goal suggests some different design decision in the assessment and the grading of it,
this multi-purpose nature can complicate the task of grading.

# Goals in Grading

Even if an assessment is created with a clear purpose, there can still be disagreements about what goals to focus on in grading.

## Fair vs Accurate

A **fair** grading system ensures that two students with equivalent levels of understanding get the same grade
and that no student with more knowledge gets a lower grade.

An **accurate** grading system ensures that each grade represents the graded students' actual quality of ... *something*.
What that something is varies by assessment goal: typically participation or engagement for formative and motivational assessments, correctness or understanding for summative and guidance assessments.

The simplest perfectly fair grading system is to give every student the same grade, which makes it entirely inaccurate.
It is generally understood that a perfectly accurate grade is also perfectly fair, but that perfectly accurate grades are impossible to create.

Highly accurate assessments often sacrifice some fairness, sometimes in biased ways.
Mathematically, it is uncommon for an approximation created to minimize cumulative error to also minimize correlations between error and individual.
Conceptually, students whose culture and background lead them to misunderstand the assessments in some way are likely to be unfairly penalized when grading focuses more on accuracy than on fairness.

## When in doubt...

:::exercise
Suppose you are grading a single short-answer question worth 10 points on an exam.
Due to the students' choice of wording, you decide that

- there's a 10% chance the student is just trying to bluff their way through and deserves 3/10  
- there's a 50% chance the student got some but not all of the ideas and deserves 5/10
- there's a 40% chance the student knew a lot but expressed it oddly and deserves 8/10

What grade will you give them?

- <label><input type="radio" name="grade" value="3">3 -- they failed to prove to me they know more than this</label>
- <label><input type="radio" name="grade" value="5">5 -- this is most likely to be their proper grade</label>
- <label><input type="radio" name="grade" value="6">6 -- this is weighted average of the possibilities</label>
- <label><input type="radio" name="grade" value="8">8 -- we failed to prove they know less than this</label>
:::

While the above scenario may be somewhat contrived (what does it even mean to say "there's a 40% chance" in this context?),
the options are intended to illuminate very real disagreements on grading philosophy present among instructors in our department.
We have

- all-or-nothing graders (option 3: it's the students' job to show they know);
- "they probably meant" graders (option 5)
- "they probably meant, but maybe not so let's bump it a point or two" graders (option 6)
- benefit-of-the-doubt graders (option 8: it's the instructors job to show they don't know)

In more than a dozen years TAing for more than a dozen different instructors at three institutions, and in all of my co-teaching experiences since becoming faculty myself, I only once had a course where the instructor clearly indicated which model they wanted in that course's grading.
