# Attendance System IoT-base

## Description
Attendance system that build by using IoT workflow. Hardware components are Raspberry Pi Zero W, LCD 16x2 I2C, RFID reader, and RFID cards. Every time card is near or stick to the RFID reader, there would be an output by below conditions:
- If card is registered                     = Success
- If card isn't registerd                   = Failed
- If card is registered, but already tapped = Failed

## Using:
- Python
- Raspberry Pi Zero W
- RFID reader and cards
- LCD 16x2 I2C
- Laravel 11
- MySQL
