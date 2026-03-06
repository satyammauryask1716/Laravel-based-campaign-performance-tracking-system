# Campaign Records Management System

A Laravel-based application for managing and analyzing **digital
marketing campaign performance** across multiple platforms and regions.
The system allows teams to track planned vs achieved campaign metrics
such as **budget utilization and impressions**, enabling performance
monitoring and data-driven decisions.

------------------------------------------------------------------------

## Overview

The Campaign Records Management System provides a centralized dashboard
to:

-   Monitor campaign performance
-   Compare planned vs achieved budgets
-   Track impressions across advertising platforms
-   Manage records manually or via Excel import

It is designed for **marketing teams, analysts, and campaign managers**
who need a simple interface to evaluate advertising performance.

------------------------------------------------------------------------

## Features

### Campaign Records Dashboard

Displays campaign data in a structured table with the following metrics:

-   Region
-   Platform
-   Ad Type
-   Planned Budget
-   Achieved Budget
-   Planned Impressions
-   Achieved Impressions

This enables quick analysis of campaign performance.

### Add Campaign Record

Users can manually add campaign entries through a form interface.

Fields include:

-   Region
-   Platform
-   Ad Type
-   Amount Planned
-   Amount Achieved
-   Impressions Planned
-   Impressions Achieved

### Excel Import

Bulk upload campaign records through Excel files.

Workflow:

1.  Upload Excel file
2.  Parse rows
3.  Validate campaign data
4.  Insert records into the database

------------------------------------------------------------------------

## Technology Stack

**Backend** - Laravel - PHP

**Frontend** - Blade Templates - Bootstrap / CSS - JavaScript / jQuery

**Database** - MySQL

**Excel Import** - Laravel Excel (maatwebsite/excel)

------------------------------------------------------------------------

## Project Structure

    app/
     ├── Http/
     │    └── Controllers/
     │          └── CampaignController.php

    resources/
     └── views/
          └── campaigns/
                ├── index.blade.php
                ├── create.blade.php
                └── upload.blade.php

    routes/
     └── web.php

    database/
     └── migrations/

------------------------------------------------------------------------

## Database Schema

  Column                 Type        Description
  ---------------------- ----------- -------------------------
  id                     bigint      Primary key
  region                 string      Campaign region
  platform               string      Advertising platform
  ad_type                string      Type of advertisement
  amount_planned         decimal     Planned campaign budget
  amount_achieved        decimal     Actual campaign spend
  impressions_planned    integer     Expected impressions
  impressions_achieved   integer     Actual impressions
  created_at             timestamp   Record creation time
  updated_at             timestamp   Record update time

  : `campaign_records`

------------------------------------------------------------------------

## Installation

### 1. Clone the repository

    git clone https://github.com/your-username/campaign-records.git
    cd campaign-records

### 2. Install dependencies

    composer install

### 3. Configure environment

Copy the environment file.

    cp .env.example .env

Update database credentials in `.env`.

### 4. Generate application key

    php artisan key:generate

### 5. Run migrations

    php artisan migrate

### 6. Start the development server

    php artisan serve

Application will run at:

    http://127.0.0.1:8000

------------------------------------------------------------------------

## Usage

### Viewing Campaign Records

Navigate to the **Records dashboard** to view all campaign performance
data.

### Adding a Record

1.  Click **Add Record**
2.  Fill in campaign details
3.  Submit the form

### Uploading Excel Data

1.  Click **Upload Excel**
2.  Select spreadsheet file
3.  Upload and import campaign data

------------------------------------------------------------------------

## Example Campaign Record

  ------------------------------------------------------------------------------------
  Region     Platform   Ad Type      Amount     Amount     Impressions   Impressions
                                     Planned    Achieved   Planned       Achieved
  ---------- ---------- ------------ ---------- ---------- ------------- -------------
  East       Facebook   Responsive   531,839    502,442    769,536       917,921
                        Display                                          

  ------------------------------------------------------------------------------------

------------------------------------------------------------------------

## Future Improvements

Potential enhancements include:

-   Campaign performance charts
-   Advanced filtering (region, platform, date)
-   Budget utilization analytics
-   Export reports (Excel / PDF)
-   API integration with advertising platforms
-   Role-based access control

------------------------------------------------------------------------

## License

This project is open-source and available under the **MIT License**.
