<?php

# Import the tools
require('tools.php');

# Then test them out:
dump('hi');
dump(['apples', 'oranges', 'pears']);

dump(sanitize('<script>alert("Hi!")</script>'));

dump(sanitize(['foo' => 'bar']));
