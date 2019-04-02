# ProgressBar Field
A Laravel Nova field to display a variable color progress bar.

<img src="https://i.imgur.com/QWpBuqh.png" />



This package displays a simple progress bar for 'completion' on your index and detail page of the nova resource. 
Typical use case would be a database field that you want to use Observers to calculate the completion of something on a save or create event.
You will need a db table column called comthing like 'completion' to use this field with.

## Instructions
- Install the package
- add the field to your model ```use Tsg\ProgressBar\ProgressBar;```
- Create a field in your nova resource ```ProgressBar::make('Completion')->exceptOnForms()->sortable(),```
- Create your Observer or to do a quick and dirty test seed some completion numbers for your records
- Open the index of the resource and see it in action, also check it out on the detail of a resource record

### Note

-  This field was build specifically with a case in mind and the initial scored completion value that is set by an Observer at 50 (100 max)
- The bar width is an inline style based on the value prop from field.value which creates a % width based on that value

You are welcome to fork and change the scoring of the field and colours as you see fit, in time I might added some more lower increments and additional colour shades.

#### To-do

- ~~Create me steps for progress increments and associated colors / shades for each, currently it starts at 50 with increments of 10 to 100~~ ✅
- Tooltip or hover action to show the actual number when mouseover the bar or field
