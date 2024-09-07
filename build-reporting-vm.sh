#!/bin/bash

# Update and upgrade the system
sudo apt-get update
sudo apt-get upgrade -y

# Install Python and necessary libraries
sudo apt-get install -y python3 python3-pip python3-venv

# Create a Python virtual environment for the reporting tool
python3 -m venv /home/vagrant/reporting_env

# Activate the virtual environment and install required Python packages
source /home/vagrant/reporting_env/bin/activate
pip install pandas matplotlib seaborn flask sqlalchemy

# Install other tools if needed
pip install requests

# Deactivate the virtual environment
deactivate

echo "Python environment for reporting VM is set up."
