# 🏨 Block-Tel Hotel Website

A responsive hotel website created for an imaginary Minecraft client named **Tanner**. This project was built as a practice project following the **Software Development Life Cycle (SDLC)**.

## 📌 Features

* Home Page
* About Page
* Rooms Page
* Gallery
* Booking Form
* Contact Page
* Responsive Design

## 🛠️ Built With

* HTML5
* CSS3
* JavaScript
* XAMPP
* Apache

## 🎯 Purpose

This project was created to practice:

* Responsive Web Design
* Front-End Development
* SDLC Documentation
* Local Web Server Setup
* Git and GitHub

---

## ⚙️ Installation & Setup

### 1. Install XAMPP

Download and install **XAMPP** if you don't already have it.

After installation, open the **XAMPP Control Panel**.

### 2. Start Apache & MySql

In the XAMPP Control Panel, start:

```text
Apache
MySql
```

You should see Apache running successfully.

### 3. Clone or Download the Repository

Clone this repository using Git:

```bash
git clone https://github.com/your-username/block-tel.git
```

Or download the repository as a ZIP file and extract it.

### 4. Move the Project to XAMPP

Copy the project folder into the XAMPP `htdocs` directory.

Usually:

```text
C:\xampp\htdocs\
```

For example:

```text
C:\xampp\htdocs\block-tel\
```

Your project structure should look something like:

```text
htdocs/
└── block-tel/
    ├── index.html
    ├── about.html
    ├── rooms.html
    ├── gallery.html
    ├── booking.html
    ├── contact.html
    ├── css/
    ├── js/
    └── images/
```

### 5. Run the Website

Open your web browser and go to:

```text
http://localhost/block-tel/
```

The Block-Tel website should now load.

---

## 🧑‍💻 How to Use

### Navigation

Use the navigation bar to access:

* **Home** — View the hotel landing page.
* **About** — Learn about Block-Tel.
* **Rooms** — Browse the available rooms.
* **Gallery** — View hotel images.
* **Booking** — Submit a booking request.
* **Contact** — View contact information.

### Booking Form

1. Navigate to the **Booking** page.
2. Enter the required information.
3. Select the desired room and booking details.
4. Submit the form.

> **Note:** This is an educational project. The booking form does not represent a real hotel reservation system.

---

## 📁 Project Structure

```text
block-tel/
│
├── index.html
├── about.html
├── rooms.html
├── gallery.html
├── booking.html
├── contact.html
│
├── css/
│   └── style.css
│
├── js/
│   └── script.js
│
└── images/
    └── ...
```

## 🧪 Running Locally

This project is designed to run locally using **XAMPP and Apache**.

If Apache is running, access the project through:

```text
http://localhost/block-tel/
```

Do **not** open the HTML files directly using:

```text
file:///C:/...
```

Using `localhost` is recommended when testing the project through XAMPP.

---

## 🐛 Troubleshooting

### Apache won't start

Another application may already be using Apache's default ports, such as **port 80**.

Check the XAMPP Control Panel logs to identify the problem.

### 404 Not Found

Make sure the project is located inside:

```text
C:\xampp\htdocs\
```

and that the URL matches the project folder name:

```text
http://localhost/block-tel/
```

### CSS or JavaScript is not loading

Check that the file paths in your HTML files match your project structure.

For example:

```html
<link rel="stylesheet" href="css/style.css">
```

and:

```html
<script src="js/script.js"></script>
```

---

## 📄 License

This project is for educational purposes only.
