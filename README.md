# Test Driven Learning

This is a simple example how learning by tests could work.

You are supposed to make a set of tests work, which roughly follow the popular
string calculator Kata.

To run the tests simple type:

    ant -Dstep=1

There are 5 steps. Once all tests pass in one step you may step up to the next
level.

During the first run the required tools will be installed. If you are offline
or on a bad connection you might want to add the following paramter:

    ant -Doffline=true -Dstep=1

Beside the simple tests there are some additional verifications applied, like
the code coverage of your tests and certain design priciples. You can / should
make this work, too. If you want to ignore certain failures, feel free to adapt
the build.properties file accordingly.

## TODO

* Ensure object calistenics rules are followed in build process

