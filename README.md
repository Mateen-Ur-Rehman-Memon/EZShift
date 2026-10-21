# EZShift — Moving Made Easy

A responsive PHP, MySQL and vanilla JavaScript house and office moving platform. It includes a customer booking flow, live estimate, booking tracking, an operations dashboard, customer/contact pages and a demo database.

## Run locally (XAMPP)

1. Copy the `EZShift` folder into `C:\xampp\htdocs`.
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Open phpMyAdmin and import `database/ezshift.sql`. The script creates and selects `ezshift_db`.
4. If your local MySQL credentials are not the defaults, set `EZSHIFT_DB_HOST`, `EZSHIFT_DB_NAME`, `EZSHIFT_DB_USER`, and `EZSHIFT_DB_PASS`, or change the defaults in `includes/app.php`.
5. Visit `http://localhost/EZShift/`.

## Demo accounts

- Admin: `mateenurrehmanmemon@gmail.com` / `e81c752fa2f28f13d8ba98f1`
- Customer: `ayesha@example.com` / `password`

The SQL script drops and recreates its tables when re-imported. Use only for a local demo database. Change demo credentials before deployment. It seeds 5 customers, 8 workers, 5 vehicles, 9 services, 30 inventory catalog items, 10 bookings and sample payments.

## Included workflows

- Customer registration/sign in with PHP password hashing and session role checks.
- Multi-section booking form with date validation, inventory rows and add-on services.
- Client-side estimate updates and a server-side price recalculation on submission.
- Booking records and inventory/service selections stored in MySQL.
- Customer dashboard, booking history and status timeline.
- Separate administrator sign in at `index.php?page=admin-login`; only active `admin` accounts can authenticate there or open admin routes.
- Admin overview shows new pending customer requests with a one-click Confirm action, alongside booking status management and worker roster creation.
- Contact form persistence, responsive navigation, and print-friendly browser styles.

The project uses a single PHP router (`index.php`) with shared rendering and handlers in `includes/app.php` to keep installation compact. Set up MySQL before using account and booking features. Public pages and the quote form remain viewable without a database.
