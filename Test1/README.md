# Test 1: Property visits grouping
Implement a gropuByProperty function that:

* Accepts an associative array containing the address for each property
* Returns an associative array containing an array of the dates for each property in any order

For example, fo associative array:
```php
[
    "2017-10-01T10:30:00"=> "10 Polwarth crescent, Edinburgh",
    "2017-10-01T11:00:00"=> "1 Wemyss place, Edinburgh",
    "2017-10-01T11:30:00"=> "10 sunnyside, Edinburgh",
    "2017-10-02T10:30:00"=> "1 Princess street, Edinburgh",
    "2017-10-02T11:00:00"=> "11 Lochend road, Edinburgh",
    "2017-10-02T11:30:00"=> "10 Polwarth crescent, Edinburgh",
    "2017-10-03T10:30:00"=> "1 Wemyss place, Edinburgh",
    "2017-10-03T11:00:00"=> "24 dundas street, Edinburgh",
]
```
The function should return:
```php
[
    "10 Polwarth crescent, Edinburgh" => ["2017-10-01T10:30:00", "2017-10-02T11:30:00"],
    "1 Wemyss place, Edinburgh" => ["2017-10-01T11:00:00", "2017-10-03T10:30:00"],
    "10 sunnyside, Edinburgh" => ["2017-10-01T11:30:00"],
    "1 Princess street, Edinburgh" => ["2017-10-02T10:30:00"],
    "11 Lochend road, Edinburgh" => ["2017-10-02T11:00:00"],
    "24 dundas street, Edinburgh" => ["2017-10-03T11:00:00"]
]

```
