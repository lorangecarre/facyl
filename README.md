# Thème Facyl

## Installation

```bash
npm install
npx husky install
npx husky add .husky/commit-msg 'npx commitlint --edit $1'
```

## Convention de commit

type(scope?): subject  #scope is optional; multiple scopes are supported (current delimiter options: "/", "\" and ",")

Types list by [convention](https://www.conventionalcommits.org/en/v1.0.0/#specification) :
- build: changes that affect the build system or external dependencies
- ci: changes to our CI configuration files and scripts
- docs: documentation only changes.
- feat: used when a commit adds a new feature to your application or library.
- fix: used when a commit represents a bug fix for your application.
- perf: a code change that improves performance.
- refactor: a code change that neither fixes a bug nor adds a feature.
- revert: revert code changes made before.
- style: changes that do not affect the meaning of the code (white-space, formatting, missing semi-colons, etc).
- test: adding missing tests or correcting existing tests.
- chore: other task.
