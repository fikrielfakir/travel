# The Journey - Community Platform

## Overview
"The Journey" is a community-based platform and association that connects people through sustainable tourism, cultural exploration, and local entertainment in Morocco. The platform acts as a bridge between locals, students, professionals, and tourists who are interested in authentic, responsible, and enriching experiences. Our mission: "Where adventure meets enlightenment."

## Project Architecture
- **Backend**: Laravel 10 PHP framework
- **Frontend**: Blade templates with Vite for asset compilation
- **Database**: PostgreSQL (Neon-hosted)
- **Payment Integration**: Multiple gateways (Stripe, PayPal, Razorpay, etc.)
- **Authentication**: Multi-role system (Admin, Agency, User)

## Key Features
- **Discover & Events Calendar**: Browse events in three main categories: Sustainable Tourism, Culture, and Entertainment
- **Club Memberships**: Join local clubs in different Moroccan cities (Tanger, Casablanca, Marrakech, Rabat)
- **Community Impact Tracking ("Our Footprint")**: Track collective achievements like participants, trees planted, cultural collaborations, and community projects
- **Member Profiles & Testimonials**: Authentic testimonials from students, professionals, artisans, and community members
- **Cultural Exchange**: Connect with local artisans, cultural centers, and community organizations
- **Sustainable Tourism Workshops**: Learn about preserving heritage while creating meaningful experiences

## Recent Changes (September 15, 2025)
- ✅ **SECURITY**: Fixed database credentials exposure by using Replit environment secrets
- ✅ Upgraded platform branding to "The Journey" with mission "Where adventure meets enlightenment"
- ✅ Created Laravel migrations and seeders for proper data management
- ✅ Set up three main categories: Sustainable Tourism, Culture, Entertainment
- ✅ Implemented club system for Moroccan cities with sample clubs
- ✅ Created Community Impact Tracking system with metrics (1,200+ Participants, 500+ Trees Planted, 50+ Cultural Collaborations, 10+ Community Projects)
- ✅ Built testimonials system with authentic reviews from students, professionals, and artisans
- ✅ Configured for Replit environment with PostgreSQL database
- ✅ Set up deployment configuration for autoscale

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