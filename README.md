# psalm-8215-repro

## about
It's a repro for https://github.com/vimeo/psalm/issues/8215

## Instructions

1. clone this repository
1. `composer install`
1. `./vendor/bin/psalm`
1. see it passes
1. Remove `,<4.24.0` from `composer.json`
1. `composer update`
1. `./vendor/bin/psalm`
1. Now see

    ```
    ➜ ./vendor/bin/psalm
    Target PHP version: 7.4 (inferred from current PHP version)
    Scanning files...
    Analyzing files...
    
    E
    
    ERROR: MixedAssignment - src/Directory.php:16:28 - Unable to determine the type that $file is being assigned to (see https://psalm.dev/032)
            foreach ($files as $file) {
    
    
    ERROR: MixedArgument - src/Directory.php:17:18 - Argument 1 of echo cannot be mixed, expecting string (see https://psalm.dev/030)
                echo $file->getPathname();
    
    
    ERROR: MixedMethodCall - src/Directory.php:17:25 - Cannot determine the type of $file when calling method getPathname (see https://psalm.dev/015)
                echo $file->getPathname();
    
      The type of getPathname is sourced from here - src/Directory.php:16:28
            foreach ($files as $file) {
    
    
    
    ------------------------------
    3 errors found
    ------------------------------
    
    Checks took 0.96 seconds and used 97.251MB of memory
    Psalm was able to infer types for 62.5000% of the codebase
    
    ```
