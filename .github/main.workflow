workflow "Push" {
  on = "push"
  resolves = ["ESLint"]
}

action "ESLint" {
  uses = "hallee/eslint-action@master"
  secrets = ["GITHUB_TOKEN"]
}
