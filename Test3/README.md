# Test 3: Software architecture
We receive enquiries from several sources.

Each source provide its enquiries to us in a different formats.

Input/output should be something like this:

```php
$ (yourapp) import
importing: "zoopla"; "Homer Simplson"; Property: "Evergreen terrace, Springfield"; time: "2017-10-01T10:30:00"
importing: "zoopla"; "Tony Stark"; Property: "10880 Malibu Point, Malibu, California"; time: "2017-10-11T23:30:00"
importing: "rightmove" ...

```


Considerations:

* Currently we are importing this files that we receive via email daily. We keep all weeks in feeds folder
* The system should be easy to extend and add new providers
    * We plan to add a third party provider who will make their feed available via external FTP site which we will connect to retrieve (You don't need to code this)
    * We plan to add another third party provider who will make their feed available via a REST API  (You don't need to code this)
* Do not implement any persistence just some dummy classes
* The focus here should be on design, more than implementation. We are less interested in seeing that this works than in seeing how you approach to the problem
* Please provide at least some unit tests (it is not required to write them for every class). Functional tests are also a plus.
* Please provide a short summary as SUMMARY.md detailing anything you think is relevant, for example:
    * Installation steps
    * How to run your code / tests
    * Where to find your code
    * Was it your first time writing a unit test, using a particular framework, etc?
    * What would you have done differently if you had had more time
    * Etc.
