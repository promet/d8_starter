# Promet Starter Repository

[![Build Status](https://travis-ci.com/promet/starter_repo.svg?token=HV9JDWzMNPjpe56WpPzy&branch=develop)](https://travis-ci.com/promet/starter_repo)

The goal for this project is to be a "starter" project for Promet Projects.

This project emphasizes:

* Easy project setup
* Easy test setup
* Commands for asset creation and deployment

This is a work in progress.

## Similar projects

* [Octane-CI](https://github.com/phase2/octane-ci)
* [Drupal Starter)(https://github.com/Gizra/drupal-starter)

## Setting up

1. Install [ddev](https://ddev.readthedocs.io/en/stable/)
2. ``ddev start``
3. ``ddev init``

## Testing

Tests are in `/tests` folder.

### Behat

Run ``ddev behat``

### Pa11y

Run ``ddev pa11y``

### Cypress

Currently there is not a container for cypress. This will make it easier to use locally. To install cypress: ``cd tests/cypress; npm i``.

To run cypress tests: ``cd tests/cypress; node_modules/.bin/cypress open`` to open the interactive test runner or ``cd tests/cypress; node_modules/.bin/cypress run`` to run all tests.

### PHP Unit

Coming soon.

## Theme

There is a starter theme for setup and testing. It is recommended to [install a new theme](https://docs.emulsify.info/installation/design-system).

To build the theme assets:

``ddev build-theme``

To run storybook:

``ddev storybook``


## Assets

| Item | Description |
|-----| ----------- |
| Local development | [ddev](https://github.com/promet/starter_repo/blob/develop/.ddev) or docksal     |
|     | [single init command](https://github.com/promet/starter_repo#setting-up) |
|     | artifact building:  <ul><li>[theme](https://github.com/promet/starter_repo/blob/develop/scripts/bin/build-theme.sh)</li><li> [docroot](https://github.com/promet/starter_repo/blob/develop/scripts/bin/build-artifacts.sh)</li></ul> |
|    | single command to get database from hosting provider |
| Testing | [travis setup](https://github.com/promet/starter_repo/blob/develop/.travis.yml) |
| | [behat tests](https://github.com/promet/starter_repo/blob/develop/tests/behat) |
| | [cypress tests](https://github.com/promet/starter_repo/blob/develop/tests/cypress)|
| | [pa11y tests](https://github.com/promet/starter_repo/blob/develop/tests/pa11y)|
| Deployment | artifact creation |
|  | |
| Drupal Tools | |
| | memcache |
| | drush |
| | drupal console |
| | environment switching |
| | entity staging (for test content) |

## Desired Assets

| Item | Description |
|-----| ----------- |
| Testing | visual regression |
| | phpunit tests |
| Drupal Tools | |
| | redis for pantheon |
| Deployment |  |
|  | terminus integration |
|  | single command to deploy to pantheon |
|  | single command to deploy to acquia |



