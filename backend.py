from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)


form_submissions = []


@app.route('/')
def home():
    return render_template('index.html')


@app.route('/submit_contact', methods=['POST'])
def submit_contact():
    if request.method == 'POST':
        name = request.form['name']
        email = request.form['email']
        message = request.form['message']


        form_data = {
            'name': name,
            'email': email,
            'message': message
        }
        form_submissions.append(form_data)

        return redirect(url_for('home'))

if __name__ == '__main__':
    app.run(debug=True)
