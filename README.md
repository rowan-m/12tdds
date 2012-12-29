12tdds
======

**12 TDDs of Christmas - a series of coding katas using Behat and the Object Calisthenics approach**

John Cleary suggested a number of coding katas following a one-per-day approach on his [Wired To The Moon blog](http://www.wiredtothemoon.com/2012/12/12-tdds-of-christmas/ "12 TDDs of Christmas")

I've decided to tackle this using [Behat](http://behat.org/ "Behat - BDD for PHP") to write the tests and using the [Object Calisthenics](http://www.markhneedham.com/blog/2008/11/06/object-calisthenics-first-thoughts/ "An overview of Object Calisthenics from Mark Needham") approach in the implementation.

A few initial thoughts while this is in progress...

Behat is perhaps not the right tool for these tests since it's arguably more about the specification rather than the behaviour. This comes through in the somewhat contrived "user stories" that I end up writing for the features, as I'm effectively inventing a user and benefit for doing these things. However, I much prefer the written format of the scenarios to the code-based approach of a specification - it feels like a nicer separation. In the first exercise, the result was that my Feature stayed relatively stable as I developed (i.e. I was mostly just adding new scenarios, not correcting assumptions in existing ones) whereas the Context was rewritten as my class design evolved.

Object Calisthenics is proving an interesting challenge, I'm finding it difficult to balance the TDD aspect of writing initial code to pass the test with not writing code that contradicts the OC principles. It forces me to consider more design as I'm coding, but the result is that I end up designing for functionality that is not currently defined by a test.
