# Clone & update source

- The first time

```bash
git submodule update --init --recursive
git submodule update --recursive --remote
```

- The second time

```bash
git submodule update --recursive
```

or 

```bash
git pull --recurse-submodules
```

- Checkout develop 

```bash
git submodule foreach git pull origin develop
```

- Clone theme to folder

```bash
git submodule add http://github.com/user/submodule.git wordpress/wp-content/themes/[name]
```