# BLucid • Console
Expanding Lucid console capabilities for Lucid Architecture.

## Command Line Interface
The console ships with a command line interface called `blucid` that you can find in `vendor/bin/blucid` and use as
```
blucid make:model Video
blucid make:policy Post
blucid make:request UpdatePost
```

> To be able to address the `blucid` cli directly you need to have `./vendor/bin` as part of your `$PATH`.
To do that, put this in your shell profile (~/.bash_profile, ~/.zshrc, ~/bashrc) `export PATH="$PATH:./vendor/bin`"

### Available Commands

- `help`             Displays help for a command
- `list`             Lists commands
- **make**
  - `make:model`  Create a new resource Controller class in a service
  - `make:policy   `  Create a new Feature in a service
  - `make:request       `  Create a new Job in a domain
- **delete**
  - `delete:model`   Delete an existing Feature in a service
  - `delete:policy    `   Delete an existing Job in a domain
  - `delete:request`   Delete an existing Service

### Commands Usage

#### Make
- `make:model <model>`
- `make:policy <policy>`
- `make:request <request>`

#### Delete
- `delete:model <model>`
- `delete:policy <policy>`
- `delete:request <request>`
