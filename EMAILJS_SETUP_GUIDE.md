# EmailJS Setup Guide for Job Application Form

## 🚀 Quick Setup Steps

### 1. Create EmailJS Account
1. Go to [https://www.emailjs.com/](https://www.emailjs.com/)
2. Sign up for a free account
3. Verify your email address

### 2. Add Email Service
1. Go to **Email Services** in your EmailJS dashboard
2. Click **Add New Service**
3. Choose your email provider (Gmail, Outlook, etc.)
4. Follow the setup instructions
5. **Copy the Service ID** (you'll need this)

### 3. Create Email Template
1. Go to **Email Templates** in your dashboard
2. Click **Create New Template**
3. Use this template content:

```html
Subject: New Job Application: {{position}} - {{applicant_name}}

Hello,

You have received a new job application through your website.

APPLICANT DETAILS:
- Name: {{applicant_name}}
- Email: {{applicant_email}}
- Phone: {{phone}}
- Portfolio/LinkedIn: {{portfolio}}

JOB PREFERENCES:
- Position: {{position}}
- Job Type: {{job_type}}
- Experience Level: {{experience}}
- Preferred Location: {{location}}

ADDITIONAL INFORMATION:
- Expected Salary: {{salary}}
- Available Start Date: {{available_date}}
- Resume File: {{resume_file}}

COVER LETTER:
{{cover_letter}}

SUBMISSION DETAILS:
- Submitted on: {{submission_date}}
- Application Source: Contact Page - Talentra HR Consultancy

Best regards,
Talentra Website
```

4. **Copy the Template ID** (you'll need this)

### 4. Get Your Public Key
1. Go to **Account** settings
2. Find **Public Key** in the API Keys section
3. **Copy the Public Key** (you'll need this)

### 5. Update Your Website Code
In your `contact.html` file, find these lines and replace with your actual values:

```javascript
// Replace these with your actual EmailJS values:
emailjs.init("YOUR_PUBLIC_KEY"); // Replace with your Public Key
emailjs.send('YOUR_SERVICE_ID', 'YOUR_TEMPLATE_ID', templateParams) // Replace Service ID and Template ID
```

### 6. Test the Form
1. Save your changes
2. Open your contact page
3. Fill out the job application form
4. Submit and check your email

## 📧 EmailJS Configuration Values You Need:

1. **PUBLIC_KEY**: Found in Account > API Keys
2. **SERVICE_ID**: Found in Email Services (e.g., service_xxxxxxx)
3. **TEMPLATE_ID**: Found in Email Templates (e.g., template_xxxxxxx)

## 🎯 Features Implemented:

✅ **EmailJS Integration**: Direct email sending without server
✅ **Smart Validation**: Only shows errors when needed
✅ **Real-time Feedback**: Green/red indicators as you type
✅ **Clean UX**: No more persistent red errors
✅ **Comprehensive Data**: All form fields sent via email
✅ **Error Handling**: User-friendly error messages
✅ **Success Confirmation**: Professional thank you message

## 🔧 Troubleshooting:

### If emails aren't sending:
1. Check browser console for errors
2. Verify your Public Key, Service ID, and Template ID
3. Make sure your email service is properly configured
4. Check EmailJS dashboard for usage limits

### If validation seems stuck:
1. Clear browser cache
2. Check that all field IDs match in the JavaScript
3. Verify form field names match template variables

## 📱 Benefits of EmailJS:

- ✅ **No Backend Required**: Works with static websites
- ✅ **Free Tier**: 200 emails per month free
- ✅ **Reliable Delivery**: Professional email service
- ✅ **Easy Setup**: No server configuration needed
- ✅ **Secure**: API keys kept client-side safe

## 🎯 Next Steps:

1. Set up your EmailJS account
2. Replace the placeholder values in contact.html
3. Test the form submission
4. Customize the email template as needed
5. Monitor submissions through EmailJS dashboard

Your job application form is now ready to receive applications directly to your email! 🚀