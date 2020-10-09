---
title: B+ means ...
...

In thinking about how to grade, it is worth understanding that there is no consensus on the purpose or meaning of grades.
With an unclear objective, it is understandable that we'll end up with unclear or contradictory recommended methods for reaching that objective.

# Who are grades for?

:::exercise
TAs and instructors are grade producers; list five different grade consumers:

- <input type="text"></input>
- <input type="text"></input>
- <input type="text"></input>
- <input type="text"></input>
- <input type="text"></input>

We have a list TAs gave in previous semesters in a footnote[^1].

[^1]:
    - students
    - parents of students
    - course staff
    - the next course
    - grad school admissions
    - future employers
    - merit-based scholarships
    - "smart-person" clubs and awards
    - support systems looking for those in need of help
:::

:::exercise
For each of the consumers listed above, why do they care about grades? What do they hope grades tell them?

- <input type="text"></input>
- <input type="text"></input>
- <input type="text"></input>
- <input type="text"></input>
- <input type="text"></input>

We have a list TAs gave in previous semesters in a footnote[^2].

[^2]:
    - students -- What should I focus on? Am I good enough? Should I be worried about the reactions of other people on this list?
    - parents of students -- Is my child being good? Is my tuition investment paying off?
    - course staff -- What are the students (mis)understanding? What topics need more attention in class?
    - the next course -- Are they ready to take this class or not?
    - grad school admissions -- Are they "good at school"? Will they succeed if we admit them?
    - future employers -- Do they know what we need them to know? This pool all look good; who's the best of them?
    - merit-based scholarships -- This pool all look good; who's the best of them?
    - "smart-person" clubs and awards -- This pool all look good; who's the best of them?
    - support systems looking for those in need of help -- Who's struggling? Who has seen a sudden drop in success?
:::

Note that several grade consumers want some form of "who's the best" measure.
"Best" is a broad topic, which is probably worth its own section.

# What contributes to success?

Many things contribute to student success in courses. For example,

- Understanding of material
- Timeliness, including
    - speed (on timed exams)
    - time management (to avoid late penalties)
- Social skills, including
    - understanding what instructor meant by ambiguous statements
    - knowing how to pose questions well
    - knowing how to trick answers out of others
    - knowing how to inspire sympathy
- Luck
    - most tests do a random sample of course material; if that sample happens to align with what I studied, I do better
    - there are better and worse student-instructor fits; might luck into good or bad fits
    - you might have been born with parents, teachers, etc who did more or less to prepare you for school

:::exercise
If you could grade each of the four items above independently, how would you combine them to create an overall grade?

- <input type="range" min="0" max="100" class="sum1" value="0" onchange="balance(this)"></input><span>0</span>% Understanding of material
- <input type="range" min="0" max="100" class="sum1" value="0" onchange="balance(this)"></input><span>0</span>% Timeliness
- <input type="range" min="0" max="100" class="sum1" value="0" onchange="balance(this)"></input><span>0</span>% Social skills
- <input type="range" min="0" max="100" class="sum1" value="100" onchange="balance(this)"></input><span>100</span>% Luck

<script>
function balance(element) {
    let sum = 0;
    document.querySelectorAll('.sum1').forEach(x => {
        sum+=Number(x.value);
    });
    let left = sum - element.value;
    let goal = 100 - element.value;
    if (goal != left) {
        if (left == 0) {
            document.querySelectorAll('.sum1').forEach(x => {if (x != element) {
                x.value = Math.round(goal/3);
            }});
        } else {
            document.querySelectorAll('.sum1').forEach(x => {if (x != element) {
                x.value = Math.round(Number(x.value)*goal/left);
            }});
        }
    }
    document.querySelectorAll('.sum1').forEach(x => x.nextElementSibling.innerHTML = x.value);
}
</script>
:::

In a mailing list of professional CS educators, Arnold Pears once wrote ""Learn the skills" should be synonymous with "Pass the course"".
That assertion went without challenge, and aligns with many of our intuitions, but there are real reasons to want other components to count.
Indeed, there is an argument that your grade should be the *maximum* of your understanding, time management, and social skills
because if you are good at any of them you can provide value to a company,
either as a developer or manager or marketer or assistant or trainer or ....

# What is a "B+ understanding"?

A common question I hear instructors and TAs ask when trying to evaluate the quality of a grading system is "does this student deserve the grade they got?"
That question presupposes a definition of the intended meaning of each letter grade.
But definitions of grades are surprising hard to come by.

## The Curve

The lore I was told by multiple senior faculty when I was staring in academia, and am repeating here without reliable sources because I have not found them, is this:

Once upon a time grades were given in a fairly piecemeal way and were mostly consumed only internally to the generating institution. Then the [central limit theorem](https://en.wikipedia.org/wiki/Central_limit_theorem) and the prevalence of bell curves came into vogue, and a new "self-calibrating" grading system came along: 

- grade on whatever scale is handy

- fit the resulting grades to a bell curve

- announce grades in standard deviations of the curve:

    - "C" = within 0.5 standard deviations of the mean
    - "B" and "D" = 1 standard deviation from "C"
    - "A" and "F" = 2 or more standard deviations from "C"

This model became known as "The Curve" and grading using it called "grading on The Curve."
But it had (at least) three problems:

- Real grades are not distributed on a perfect bell curve.
    They are not independent variables, so the central limit theorem does not apply.
    In practice, they tend to be [fat-tailed ditributions](https://en.wikipedia.org/wiki/Fat-tailed_distribution), often with multiple peaks.

- Not many people are two standard deviations from the mean.
    People want to tell more people they are good,
    and to deter more people from continuing by giving them bad grades.

- Grading on a curve creates competition, including incentives for academic sabotage:
    the worse other students do, the more likely your knowledge is to be graded highly.

On the positive side, the wide-spread popularity of this grading system
meant that it became possible for grades to be interpreted outside of the granting institution.
That had a slow but dramatic impact on the overall perceived importance of grades.

## The inflated curve

If you define "C" as "average student"
and then tell a university that "most of your students are at or below average"
that rubs most universities wrong.
Clearly *we* are the exception: almost all of our students are well above average!

Result: grade inflation.
Grades are still [based on relative performance](https://en.wikipedia.org/wiki/Relative_grading) but now the cut-offs between letters are flexible and can change, and generally move toward higher grades over time.
More and more, universities are even allowing each course to pick their own curve
so that a student who is reliably at the 80th percentile in every class may get A+ in one class and B- in another.

## Our department's definition

UVA does not have a definition of the goals of grades.
The School of Engineering and Applied Sciences at UVA does not have a definition of the goals of grades.
The College of Arts and Sciences does have a "standard grading scale" mapping points to letters, but does not define what a point is or how easily they should be given out.

The CS department does have a definition of the intended meaning of each grade,
created by a committee of our faculty and approved by a vote of our faculty:
<http://ugrads.cs.virginia.edu/grading-guidelines.html>.
As a rough summary:

Letter  Word        Learning            Prediction for next course
------  ---------   ------------        -----------------------
A       Good!       mastered all        you'll do well
B       Okay        competent in most   able to to well, though review recommended
C       Caution     sufficient          it'll be challenging, but possible with review
D       Danger!     minimal             you'll probably fail
F       No          insufficient        you're definitely not ready

# How do we combine repeated assessments?

:::exercise
Suppose you have graded a student on three assessments measuring similar ideas:
they got 40% on the first, 50% on the second, and 90% on the third. You should give them an overall score of 

- <label><input type="radio" name="weight" value="60">60% -- the mean, what points and weight do</label>
- <label><input type="radio" name="weight" value="50">50% -- the median, an outlier-robust way of averaging</label>
- <label><input type="radio" name="weight" value="90">90% -- the most recent, presumably the best match for current understanding</label>
:::

This is also not a topic of consensus among our faculty, though fortunately most TAs are not asked to weigh in on this.
But whether to permit grade replacements or not can be a contentious topic among those who are asked to consider it.

# How do we combine topics in a course?

:::exercise
Suppose you are assembling final grades for a course with 4 major topics.
Student $X$ earned 75% in all 4 topics.
Student $Y$ earned 90% in 3 topics and 30% in one topic.

- <label><input type="radio" name="course" value="same">give $Y$ the same grade you give $X$: they both got the same number of points overall</label>
- <label><input type="radio" name="course" value="peak">give $Y$ a higher grade than you give $X$: $Y$ clearly has more potential</label>
- <label><input type="radio" name="course" value="trough">give $Y$ a lower grade than you give $X$: $Y$ clearly hasn't learned enough about on topic to keep going with later courses</label>
:::

This is also not a topic of consensus among our faculty, though fortunately most TAs are not asked to weigh in on this.
Some of our faculty argue that if a student can pass a prereq without learning all the prereq content, we are setting them up to fail in later courses.
Other faculty argue that one bad topic does not make someone a bad student,
or even that specialists are more valuable than generalists and that this kind of topical-differentiated grades are a good sign.
