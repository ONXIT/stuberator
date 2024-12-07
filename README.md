# Stuberator

[![Latest Stable Version](https://img.shields.io/packagist/v/onxit/stuberator.svg)](https://packagist.org/packages/onxit/stuberator)
[![License](https://img.shields.io/packagist/l/onxit/stuberator.svg)](LICENSE)
[![Downloads](https://img.shields.io/packagist/dt/onxit/stuberator.svg)](https://packagist.org/packages/onxit/stuberator)

**Stuberator** is a Laravel package designed to simplify the creation of architectural elements through command generators and stubs. It currently supports the generation of **Actions**, **Services**, and **Enums**. Future releases will include support for **Domain-Driven Design (DDD)** modules.

---

## 📦 Installation

Add the package to your Laravel project using **Composer**:

```bash
composer require onxit/stuberator
```

## 🚀 Usage
Stuberator provides the following Artisan commands to generate files:

### Generate an Action
   Run the following command to create a new Action class:


```bash 
php artisan make:action <ActionName>
```
The generated file will be placed in the App\Actions namespace by default.

### Generate a Service
   Run the following command to create a new Service class:

```bash 
php artisan make:service <ServiceName>
```

The generated file will be placed in the App\Services namespace by default.

### Generate an Enum
   Run the following command to create a new Enum class:

```bash 
php artisan make:enum <EnumName>
```

The generated file will be placed in the App\Enums namespace by default.


## 🗺 Roadmap
Support for Domain-Driven Design (DDD): Future updates will include commands and scaffolding for DDD modules such as Aggregates, Value Objects, Repositories, and more.
Additional stub-based generators.

## 🤝 Contributing
Contributions are welcome! Feel free to open an issue or submit a pull request to improve this package.

- Fork the repository.
- Create a new branch for your feature or bugfix.
- Commit your changes and submit a pull request.