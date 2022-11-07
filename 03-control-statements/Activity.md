# Create a script to print movies per director

In this activity, we'll look at nested looping and apply conditions to restrict iterations of inner and outer loops.

We will have a multi-dimensional associative array where the director's name acts as the key to hold an array of movies.

These instructions are for a script but you could equally use query parameters and create a page!

1. Create the `activity-movies.php` script file which takes two arguments, both numerical. The first number will be for the number of directors and the second one will be used for number of mives.
2. Adda  nested array containing a list with five directors, each entry containing a list of five movie titles.
3. By running the script, print the list of directors and the movie titles, as required by the input arguments.
4. If the input arguments are not passed, then consider the default value of 5 for both.
5. Here's some sample output of running `php activity-movies.php 3 2`:
```
Steven Spielberg's movies:
	> The Post
	> Bridge of Spies
Christopher Nolan's movies:
	> Dunkirk
	> Quay
Martin Scorsese's movies:
	> The Wolf of Wall Street
	> Hugo
```
