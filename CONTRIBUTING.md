# How to Contribute

WebbyPHP (webbyphp/engine) is a community driven project and accepts contributions of code and documentation from the community. These contributions are made in the form of Issues or [Pull Requests](http://help.github.com/send-pull-requests/) on the [webbyphp/engine repository](https://github.com/webbyphp/engine) on GitHub.

Issues are a quick way to point out a bug. If you find a bug or documentation error in webbyphp/engine then please check a few things first:

1. There is not already an open issue
2. The issue has already been fixed (check the develop branch, or look for closed issues)
3. Is it something really obvious that you can fix yourself?

Reporting issues is helpful but an even better approach is to send a Pull Request, which is done by "Forking" the main repository and committing to your own copy. This will require you to use the version control system called Git.

## Guidelines

Before we look into how, here are the guidelines. If your Pull Requests fails to pass these guidelines it will be declined and you will need to re-submit when you’ve made the changes. This might sound a bit tough, but it is required for us to maintain quality of the code-base.

### Coding Standards

- [PSR-12](https://www.php-fig.org/psr/psr-12/) is in favour, even though not all might be adhered to, a little help is provided below.
- Code MUST use tabs for indenting, 4 spaces can also be allowed but we are looking at not getting a messy code base, so please try your best and stick to it.
- A class opening `{` must be on the next line.
- A method or function opening `{` must be on the next line.
- Class names MUST be declared in [StudlyCaps](http://en.wikipedia.org/wiki/CamelCase), e.g., `Class FooBar { }`.
- Variable names
  - In classes MUST be declared in [camelCase](http://en.wikipedia.org/wiki/CamelCase), e.g., `$fooBar`.
  - Variable names declared in helper functions MUST be in [snake case](https://en.wikipedia.org/wiki/Snake_case) like this `$some_variable`.
- Function names
  - In classes MUST be declared in [camelCase](http://en.wikipedia.org/wiki/CamelCase), e.g., `function fooBar() { }`
  - Helper function name MUST be declared using [snake case](https://en.wikipedia.org/wiki/Snake_case), e.g., `function some_function() { }`.

### Documentation

If you change anything that requires a change to documentation then you will need to add it. New classes, methods, parameters, changing default values, etc are all things that will require a change to documentation. The change-log must also be updated for every change. Also PHPDoc blocks must be maintained. We are looking forward to modifying the code base to reflect the new PHP 8 syntax from time to time

### Compatibility

Webby recommends PHP 8.3 or newer to be used, but it should be compatible with PHP 8.3 so all code supplied must stick to this requirement.

## How-to Guide

There are two ways to make changes, the easy way and the hard way. Either way you will need to [create a GitHub account](https://github.com/signup/free).

Easy way: GitHub allows in-line editing of files for making simple typo changes and quick-fixes. This is not the best way as you are unable to test whether the code works. If you do this you could be introducing syntax errors, etc, but for a Git-phobic user this is good for a quick-fix.

Hard way: The best way to contribute is to "clone" your fork of webbyphp/engine to your development area. That sounds like some jargon, but "forking" on GitHub means "making a copy of that repo to your account" and "cloning" means "copying that code to your environment so you can work on it".

1. [Set up Git](https://help.github.com/en/articles/set-up-git) (Windows, Mac & Linux)
2. Go to the [webbyphp/engine](https://github.com/webbyphp/engine)
3. Fork the develop [branch](https://help.github.com/en/articles/fork-a-repo)
4. [Clone](https://help.github.com/en/articles/fetching-a-remote#clone) your forked webbyphp/engine repo: https://github.com/<your-name>/engine.git
5. Checkout the "develop" branch. At this point you are ready to start making changes.
6. Fix bugs on the Issue tracker after taking a look to see nobody else is working on them.
7. [Commit](https://help.github.com/en/articles/adding-a-file-to-a-repository-using-the-command-line) the files
8. [Push](https://help.github.com/en/articles/pushing-to-a-remote) your develop branch to your fork
9. [Send a pull request](https://help.github.com/en/articles/creating-a-pull-request)

The Maintainers will now be alerted about the change and at least one of the team members will respond. If your change fails to meet the guidelines it will be bounced, or feedback will be provided to help you improve it.

Once the maintainer handling your pull request is happy with it they will merge it into develop and your patch will be part of the next release.

### Setup
1. You will need to install the WebbyPHP Framework through composer

```bash
$ composer create-project webbyphp/webby webby-setup
```

2. You can now navigate to the vendor folder in your webby-setup project and inside the [webbyphp] directory you need to delete the engine directory

3. When done you can clone your forked branch of the webbyphp/engine repo
from the lastest : [your-branch](https://github.com/<your-git-user>/engine)

NB: Please note that your forked branch should come from the main branch

4. You can now work on the your new changes in the cloned repo.

5. After you have tested all new features that you have added make a pull request to the [develop] branch
   
6. Your changes will be reviewed and merged as it passes all checks

### Branching (Making and Submitting Changes)

We follow [the successful Git branching model](http://nvie.com/posts/a-successful-git-branching-model/).

- Create a **topic/feature** branch from where you want to base your work. This is usually the **develop** branch: `$ git checkout -b mynewfeature develop`
- For bug fixes, create a branch from main `$ git checkout -b mybugfix main`.
- Better avoid working directly on the main branch, to avoid conflicts if you pull in updates from origin.
- Make commits using descriptive commit messages and reference the #issue number (if any).
- Push your changes to a topic branch in your fork of the repository.
- Submit a pull request to [the webbyphp/engine original repository](https://github.com/webbyphp/engine), with the correct target branch.

## Which branch?

- Bugfix branches will be based on main.
- New features will be based on the branch **develop** or the target release branch if any.

Looking at the nature of the Webby Framework, it has it's engine in a different Github repository [webbyphp/engine](https://github.com/webbyphp/engine)
And so all contributions will have to be focused on that repository. It has been hard to figure out how to allow contributors to add to the project. 

Currently Pull requests are to be sent to the develop branch of the Github repo [webbyphp/engine](https://github.com/webbyphp/engine) which will be coming from your forked branch at your end.

One thing at a time: A pull request should only contain one change. That does not mean only one commit, but one change - however many commits it took. The reason for this is that if you change X and Y but send a pull request for both at the same time, we might really want X but disagree with Y, meaning we cannot merge the request. 

### Signing

You must sign your work, certifying that you either wrote the work or otherwise have the right to pass it on to an open source project. git makes this trivial as you merely have to use `--signoff` on your commits to your WebbyPHP fork.

`git commit --signoff`

or simply

`git commit -s`

This will sign your commits with the information setup in your git config, e.g.

`Signed-off-by: Oteng Kwame <developerkwame@example.com>`


### Keeping your fork up-to-date

To keep your fork up to date, you can visit your forked repo and go to the "Sync Fork" drop-down. You will see two buttons
1. Compare
2. Update Branch

Click on the "Update Branch" button to sync and update your fork to the current version. 

### Notice

Currently figuring things out on how to improve contributions. Stay Tuned

## Comments on this contribution guideline

If you have suggestions on how this process could be improved please submit a Pull Request.

