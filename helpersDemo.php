<?php

# Import the tools
require('helpers.php');

# Then test them out:
dump('hi');
dump(['apples', 'oranges', 'pears']);

dump(sanitize('<script>alert("Hi!")</script>'));

dump(sanitize(['foo' => 'bar']));
