pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                echo 'Cloning the code from GitHub...'
            }
        }
        stage('Build') {
            steps {
                echo 'Building the project...'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing the project...'
            }
        }
    }
}