# CF7 Country Detector

CF7 Country Detector is a WordPress plugin designed to capture the user's IP location when a Contact Form 7 form is submitted. The plugin retrieves the user's location data, including city, region, and country, and appends this information to the email body sent by the form. This can be useful for gaining insights into where your form submissions are coming from.

## Features

- **IP Address Detection**: Automatically detects the user's IP address during form submission.
- **Location Information**: Retrieves detailed location data such as city, region, and country.
- **Email Integration**: Appends the location data to the Contact Form 7 email body, providing useful context for submissions.

## Installation

### From WordPress Dashboard

1. Download the plugin zip file.
2. Go to your WordPress dashboard and navigate to `Plugins > Add New`.
3. Click on the `Upload Plugin` button and select the downloaded zip file.
4. Install and activate the plugin.

### Manual Installation

1. Download the plugin files or clone the repository:
   ```sh
   git clone https://github.com/builderhall/CF7-Country-Detector.git
   ```
2. Upload the `CF7-Country-Detector` folder to your WordPress installation's `wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

1. Ensure that Contact Form 7 is installed and activated on your WordPress site.
2. Upon activation, the CF7 Country Detector plugin will automatically start capturing the user's IP location during form submissions.
3. The location data will be included in the email sent by Contact Form 7 under the label "User Location".

## Requirements

- **WordPress Version**: 4.0 or higher
- **Contact Form 7 Plugin**: Make sure the Contact Form 7 plugin is installed and active.

## Important Notes

- The plugin utilizes the [ipinfo.io](https://ipinfo.io/) service to fetch location data based on the IP address. Please review their usage policies and adhere to their terms of service.
- Be mindful of privacy and data protection laws in your jurisdiction, especially regarding the collection and use of IP addresses and location data.

## Troubleshooting

- If the location data is not appearing in your emails, ensure that the Contact Form 7 plugin is up to date and that the plugin is properly activated.
- Check for any firewall or security settings that may block external API requests, as these can interfere with retrieving location data.

## Contributing

We welcome contributions! If you'd like to contribute, please follow these steps:

1. Fork the repository.
2. Create a feature branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -m 'Add your feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a pull request and describe your changes.

## License

CF7 Country Detector is licensed under the GPLv3 or later. You can find the full text of the license in the [LICENSE](LICENSE) file.

## Acknowledgements

- Special thanks to the developers of [Contact Form 7](https://contactform7.com/).
- Location data is powered by [ipinfo.io](https://ipinfo.io/).

## Support

For any issues or questions, please visit the [GitHub Issues](https://github.com/builderhall/CF7-Country-Detector/issues) page. We appreciate your feedback and are here to help.

## Author

**Builder Hall Ltd.**

- **Website**: [builderhall.com](https://builderhall.com)
- **GitHub**: [@builderhall](https://github.com/builderhall)

Thank you for using CF7 Country Detector! We hope this plugin enhances your form submission tracking experience.
