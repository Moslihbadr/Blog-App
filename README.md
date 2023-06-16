# Blog App

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://opensource.org/licenses/MIT)

A modern and user-friendly blog app built using HTML, CSS, Bootstrap, jQuery, PHP, and MySQL. This app allows users to create their own blogs, manage their content, update existing blogs, and discover blogs created by other users.

## Features

- **Blog Creation:** Users can create their own blogs by providing a title, content, and additional details.
- **Blog Management:** Users have complete control over their blogs and can delete or update them as desired.
- **Blog Discovery:** Users can explore and read blogs created by other users, expanding their knowledge and interests.
- **User Authentication:** Secure login and registration feature to protect user accounts and provide personalized experiences.
- **User-friendly Interface:** The app features a clean and intuitive user interface, enhancing the user experience and making blog creation and reading a seamless process.

## Technologies Used

- HTML
- CSS
- Bootstrap
- jQuery
- PHP
- MySQL

## Installation

1. Clone the repository: `git clone https://github.com/Moslihbadr/Blog-App.git`
2. Set up a local web server (XAMPP) and configure it to serve the project directory.
3. Import the provided MySQL database file into your local MySQL server.
4. Update the database connection details in the `connect_DB.php` file to match your local database configuration.

## Usage

1. Open the app in your web browser by accessing the local web server's URL.
2. Explore the app's features, including creating your own blogs, managing them, and discovering blogs created by others.
3. Utilize the secure login and registration feature to access personalized experiences.
4. Interact with the user-friendly interface to navigate through the app and enjoy a seamless blogging experience.

## Releases

### v1.3.1 (Latest)

Date: 16/06/2023

This release introduces a new feature for enhanced blog management :

- Update existing blog posts: Users can now edit their blog's writer, title, body, and other details.
- Improved user experience: The update form provides a seamless editing experience with a clean and intuitive interface.
- Real-time validation: The form ensures that all required fields are filled before allowing the update to be submitted.
- Optimized performance: We have optimized the update process to ensure efficient handling of blog updates, delivering a faster experience.

### v1.2.1

Date: 11/06/2023

This release addresses a bug related to user authentication in the login and signup pages. Previously, users were able to access these pages even when they were already logged in. To ensure a consistent user experience and prevent unnecessary actions, this bug fix restricts access to the login and signup pages for users who are already logged in.

With this update, logged-in users will be automatically redirected to the main application page, providing a streamlined experience and eliminating any confusion or unnecessary interactions.

### v1.2.0

Date: 10/06/2023

This release introduces a new feature for enhanced blog management and user control:

- Added the ability for users to delete their own blogs if they are the owner or an admin.
- Improved user experience with the option to remove unwanted or outdated blogs.
- Enhanced security measures to ensure that only authorized users can delete blogs.
- Bug fixes and performance improvements for a smoother overall experience.

With this new feature, users now have more control over their blogs, allowing them to manage their content effectively. The addition of the delete functionality enables users to remove blogs that are no longer relevant or desired, providing a streamlined and personalized blogging experience. The release also includes various bug fixes and performance enhancements to enhance the app's stability and speed.

### v1.1.0

Date: 06/06/2023

This release includes the following updates:

- Added user authentication feature for secure login and registration.
- Improved user experience with personalized login and signup forms.
- Enhanced security measures to protect user information.
- Added logout feature for seamless session management.
- Bug fixes and performance improvements.

### v1.0.0

Date: 04/06/2023

This release introduces the initial version (v1.0.0) of our Blog App, a web application built using HTML, CSS, jQuery, PHP, and MySQL. The Blog App allows users to create and manage their own blogs, as well as discover and read blogs created by others.

Key Features:

- Blog Creation: users can create their own blogs, providing a title, content, and additional details.
- Blog Management: Users can delete or update their own blogs, giving them complete control over their content.
- Blog Discovery: Users can explore and read blogs created by other users.
- User-friendly Interface: The app features a clean and intuitive user interface, enhancing the user experience and making blog creation and reading a seamless process.

## Deployment

The Blog App is currently deployed and accessible at [https://palynological-dange.000webhostapp.com/](https://palynological-dange.000webhostapp.com/). Users can visit the website and start creating their own blogs or explore existing blogs shared by the community.

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

## Acknowledgements

- [Bootstrap](https://getbootstrap.com/)
- [jQuery](https://jquery.com/)
- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/)

## Contributing

Contributions are welcome! If you have any ideas, suggestions, or improvements, please open an issue or submit a pull request.

## Contact

For any inquiries or feedback, please contact [moslihbadr2@gmail.com](mailto:moslihbadr2@gmail.com).

Happy blogging!
