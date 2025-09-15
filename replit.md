# Laravel Tour Booking Application

## Overview
This is a Laravel 10 tour booking and travel agency management application that has been successfully configured to run in the Replit environment. The application includes a comprehensive backend API, admin dashboard, agency portal, and user interface for managing tours, bookings, and travel services.

## Project Architecture
- **Backend**: Laravel 10 PHP framework
- **Frontend**: Blade templates with Vite for asset compilation
- **Database**: PostgreSQL (Neon-hosted)
- **Payment Integration**: Multiple gateways (Stripe, PayPal, Razorpay, etc.)
- **Authentication**: Multi-role system (Admin, Agency, User)

## Key Features
- Tour package management
- Multi-role user system (Admin, Travel Agencies, Customers)
- Booking and payment processing
- KYC verification
- Support ticket system
- Multi-language support
- Social login integration

## Recent Changes (September 15, 2025)
- ✅ Configured for Replit environment
- ✅ Set up PostgreSQL database with migrations
- ✅ Installed all PHP dependencies via Composer
- ✅ Installed Node.js dependencies and built assets
- ✅ Configured Vite for Replit proxy environment
- ✅ Set up deployment configuration for autoscale
- ✅ Added SSL requirement for database connections

## Development Setup
The application is configured to run on:
- **Development server**: http://0.0.0.0:5000 (Laravel Artisan server)
- **Asset compilation**: Vite on port 3000 (when needed for development)
- **Database**: PostgreSQL with SSL enforcement

## Database Schema
The application includes comprehensive database schema for:
- User management (users, agencies, admins)
- Tour packages and categories
- Booking system
- Payment processing
- Support system
- Club and community features

## Security Configuration
- Environment variables properly configured
- Database SSL connections enforced
- .gitignore configured to exclude sensitive files
- Multi-factor authentication support

## Deployment
The application is configured for Replit's autoscale deployment with:
- Automated asset building
- Cache optimization
- Database migrations
- Production-ready server configuration