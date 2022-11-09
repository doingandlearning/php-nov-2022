# Create a Support Contact form

You are asked to implement a Support Contact Form on a new brand website. The form will be available for authenticated users only, on the Profile page, and the authentication part is in your charge as well. There will be two types of users: standard and VIP level. The standard users will be able to ask for support once per day, while the VIP users will have no limit. The form will contain the following fields: the name and the email where the replies shuold be sent to and the message. The form data should be sanitized and validated before it is registered. The rules are as follows: all required fields should be filled, use a valid email address and the message should not be shorter than 40 characters.

Use the starter code to add this functionality.

The first three steps are already covered in the starter code but make sure you understand them.

1. Write the code to fetch the user data for the username that is logged in.
2. Implement the \Handlers\Login::handle() method to validate the user credentials.
3. Remove the hint for credentials in the login form.
4. Edit the src/templates/profile.php to have a support area and divide it into two equal horizontal parts. ()
5. Create a support contact form with the specs:
- two inputs of type text (one for name and one for email)
- a textarea for the message
- each of these should have an associated label
- if there are errors they should be printed under the input with the erroneous data.
6. Write the code to prevent a standard-level user from sending more than one form a day.  You can use the alerts components from the Bootstrap framework.
7. Secure the form by generating and using a CSRF token.
8. On the submit button, you might want to add more form data so we can know which form is being sent. This can be useful if you have multiple forms on the same page.
9. Write code to display the message list history. You could use the card component and print the details. Each stored entry will contain the form data and the time when the form was sent (timeAdded key).
10. Write the code to validate the submitted form and to refresh the page if the validation is successful.
11. Input the code to send the data to the template: the username, the form errors (if any), the CSRF token and the forms history.
12. Add the form validation logic in a separate method.
13. Check for multiple submissions in the case of the standard-level users.
14. Write the code to display an error message if the user attemps to submit an empty name field.
15. Implement email validation using the filter_var() function with FILTER_VALIDATE_EMAIL validation
16. For the message field, write code to ensure that the message is at least 40 characters long.
17. Collect the sanitized form data and store it in the $form variable, which is then returned wit the $errors variable.
18. Now test the full implementation.

As always there is solution code included.