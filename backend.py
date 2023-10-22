from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)

# Define a list to store form submissions (for demonstration purposes)
form_submissions = []

# Serve the HTML templates
@app.route('/')
def home():
    return render_template('index.html')

# Handle the contact form submission
@app.route('/submit_contact', methods=['POST'])
def submit_contact():
    if request.method == 'POST':
        name = request.form['name']
        email = request.form['email']
        message = request.form['message']

        # Here, you can save the form data to a database or do other processing
        # For demonstration purposes, we'll store it in a list
        form_data = {
            'name': name,
            'email': email,
            'message': message
        }
        form_submissions.append(form_data)

        return redirect(url_for('home'))

if __name__ == '__main__':
    app.run(debug=True)
