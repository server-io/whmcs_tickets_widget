# WHMCS Tickets Widget

This repository contains a widget for the WHMCS dashboard that displays tickets waiting for a response. The widget updates automatically every 10 seconds.

## Features

- **Real-time Updates:** Automatically refreshes every 10 seconds to ensure up-to-date information.
- **Easy Integration:** Simple to add to your existing WHMCS dashboard.
- **Customizable:** Easily adjustable to fit your specific needs.

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/server-io/whmcs_tickets_widget.git
    ```

2. **Navigate to the repository directory:**

    ```bash
    cd whmcs_tickets_widget
    ```

3. **Copy the widget files to your WHMCS installation:**

    ```bash
    cp -r widget_directory /path/to/whmcs/modules/widgets/
    ```

4. **Ensure the widget is enabled in your WHMCS dashboard.** 
   - Go to **WHMCS Admin Area** > **Setup** > **Widgets**.
   - Find the "Tickets Widget" and enable it.

## Configuration

1. **API Credentials:**
   - Make sure your WHMCS API credentials are correctly configured in the widget settings.

2. **Customization:**
   - You can adjust the refresh interval or other settings in the widget's configuration file if needed.

## Usage

- Once installed and configured, the widget will appear on your WHMCS dashboard.
- It will display tickets that are currently waiting for a response and refresh automatically every 10 seconds.

## Contributing

We welcome contributions! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Open a Pull Request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

---

Thank you for using the WHMCS Tickets Widget!
