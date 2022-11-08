# Building a Student and Professor Object Relationship

The aim of this activity is to implement OOP concepts to create Student and Professor classes with parameterized constructors, attributes and member methods. A professor might have a certain number of students enrolled in their class. The list of students should be printed using a member method of the Professor object.

1. Create a working directory for the activity and add a activity-classes.php file there.
2. Create Professor and Student classes in separate directories with the following functionalities.
- Both use their own namespacing to load the classes automatically
- Both take the name as the first argument in the constructor; the Professor class accepts the second argument as a list of students - the list will be filtered for instances of Student only.
- Both will have the title property, which, by default, for the Professor class is Prof and for the Student class is student.
4. Create a function that will print the Professor's title, name, the student count and the list of students.
5. Create a Professor instance, providing a name and a list of students - instances of Student with a name in the constructor.
6. Add a random amount of Student instances to the Professor instance.
7. Change the title of the professor to Dr..
8. Print tee output by invoking the function with the Professor instance.

The output should look something like:
```
Prof. Charles Xavier (4):
	1. Storm
	2. Wolverine
	3. Cyclops
	4. Jane
```