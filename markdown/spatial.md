---
title: Spatial Reasoning
...

Imagine we had addressed all of the diversity-impeding forces we've discussed so far:

- Stereotype threat: we've
    - stopped raising awareness
    - reinforced that most people don't believe them or think about them
    - helped build students' identities as computer scientists
    - gotten to know students as individuals, not as members of groups
    - built strong growth mindset in our students
- Implicit bias: we've
    - become aware of our biases and developed counter-biases
    - applied cognitive filters to reduce the impact of biases
    - added fair algorithms for common tasks
- Microagressions: we've
    - learned how what we say is heard by others
    - replaced offensive vocabulary with vocabulary others appreciate

but then suppose we measure performance of two groups and see one is strongly out-performing the other.
Perhaps that was due to selection bias, so let's assume we fix that too.

Does this mean that the worse-performing group is cognitively inferior?

# Differential Preparation

Many factors contribute to success in academics, of which raw "cognitive muscle" is just one.
Others include

- Prior exposure: the less new a topic is, the more incomplete schemata the student can build off of and the easier it is to learn.

- Prerequisites: a solid understanding of prerequisite courses' topics means less working memory needs to be given to those areas, leaving more for learning the new topics.

- Hidden curriculum: schools are social structures, with social rules, social capital, etc, that all need to be learned. It values certain attitudes, means of expression, etc. The better these are learned and adopted, the easier school becomes.

- Hidden prerequisites: sometimes instruction assumes some prerequisite knowledge that even the instructor doesn't realize is needed.

Until these are all balanced, we cannot expect all students to perform equally.
Let's look more at one particular hidden prerequisite in CS: spatial reasoning.

# Spatial Reasoning

Early in the quest for a universal IQ test
one proposal was a test consisting of depictions of shapes
and requests to analyze various aspects of those shapes,
such as what they'd look like rotated 90° or cut in half or unfolded.
Further analysis revealed these tests were measuring a learned skill, not inherent intelligence^[As an aside, I have yet to see a test that does measure "inherent intelligence" and remains skeptical that such a thing even exists.];
a skill that came to be known as "spatial reasoning".

## CS is Spatial?

Spatial reasoning has been shown to have strong correlation with success in many disciplines, including success in CS classwork^[I am unaware of any study showing it is correlated with success in CS-related careers, only classes.].
This is initially somewhat surprising.
Everything computers do happens without any moving parts on a tiny piece of silicon. It's not like sculpture or mechanical engineering where spatial relationships are intrinsically important to the field.
So why this correlation?

Why's are hard to answer scientifically, but I offer as a partial explanation
the prevalence of spatial analogies in CS teaching and official CS vocabulary.
For example,

- We call references "pointers" and "addresses"
- We say that data composed of other data "contains" that other data
- We call data that contains references to other data "trees" and talk about them having "left" and "right" references
- We describe the workings of recursion by using a "stack"
- We teach about variables by talking about "boxes" and the values they "contain"

And so on.

:::exercise
Identify a topic in the class you TA that neither (a) has spatial allusions in the official vocabulary nor (b) is taught using a spatial analogy.
:::

The unusual thing about these is they are generally not central to the topic at hand.
When I think about recursion I don't picture a stack; when I think about a tree I don't think about its shape; these are (at least mostly) learning and communicating tools only.

## Spatial is demographically differential

Spatial reasoning is not part of common formal curricula.
Instead, it is primarily learned via leisure activities.
Many of those activities are either correlated with money (to afford the components) or are stereotypically more used by certain demographic groups than others:
for example, playing with blocks and playing 1st-person video games in maze-like environments are both developers of spatial skills.
Both suffer from both cost and cultural-appropriateness biases.

Ergo, we expect to see demographical differentials in spatial reasoning coming into our classes,
and hence demographical differentials in how easy the class is for our students.

## Two ways around

There are two basic approaches to leveling the playing field when differential preparation is identified:

1. Teach everyone the skills only some arrive with.

    This is a useful strategy, but also time consuming in both teaching resources
    and student time. It often leaves those who enter ahead of their peers ahead of their peers because they have fewer classes to take.

2. Remove dependence on skills only some arrive with.
    
    While not always possible, this adjustment of curricula can do much to make learning more smooth for all students
    because it becomes less fragile: fewer prereqs = fewer places to get something wrong.

Spatial reasoning is an example topic we can usually remove the dependence upon
via the simple process of taking the analogy out of their heads and using the physical world to hold it instead.
Don't talk about a stack and expect the student's brain to handle it;
don't even draw it out and expect the student's brain to understand that one bit is on top of another bit; rather, physically stack up a bunch of pieces of paper, one on top of another, so that the analogy is concrete and the student can focus on what it means, not how it works.

# Detect and diagnose differences

Over the past two weeks we've discussed many reasons why some students may find our courses more difficult than others, and many strategies to try to rectify those differences.
But we haven't talked about them all.
The week before we also discussed more general learning and teaching strategies,
but again far from the full set.

I strongly encourage you to regularly look for patterns in what is not going well in your teaching,
ponder possible causes,
and design new approaches that might not have those problems.
Not every such change will work, but over time you can get better and better at teaching,
and doing so in ways that can help every student, regardless of their background and experience.
