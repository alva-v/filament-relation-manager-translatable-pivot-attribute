# Filament relation manager translatable pivot attribute always updating on defaut locale
When updating a translatable pivot attribute, the value is always updated on the default locale, regardless of the language selected on the locale switcher.

## To reproduce
```
git clone git@github.com:alva-v/filament-relation-manager-translatable-pivot-attribute.git

php artisan migrate --seed

php artisan make:filament-user
```
* Go to `/admin/login` and log in
* Go to `/admin/foos/1/edit`
* Use the Bars relation manager locale switcher to change the language to french
* In Bars relation manager, click on __Edit__
* Modify the content of the __Attribute__ input

## Expected
The french value of the translatable pivot attribute named __attribute__ should be updated.

## Actually happening
The english value of the translatable pivot attribute named __attribute__ is updated.

When updating with the english language selected, the value is updated for the english language.