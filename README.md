# acTrack
Command line time-tracking app for active.collab - it's at least as sexy as the official Win/Mac app ;)

## Prerequisite

- PHP 5.4+
- Enable the posix module in your php.ini for colors

## Installation

 - [Download the compiled .phar file](https://github.com/saibotd/acTrack/raw/master/dist/actrack.phar).
 - Make it executable `chmod +x actrack.phar`.

Alternatively, clone this repository if you know your way around git and composer.

## Usage

    ./php actrack.phar

Enter your login data for active.collab and follow the on-screen instructions.

If you cloned the repo and pulled the dependencies you may start acTrack like this:

    ./actrack

## Features missing

- Self-hosted instances
- Track time on projects, currently only tasks are trackable
