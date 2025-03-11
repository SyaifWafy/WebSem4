pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git branch: 'master', 
                    url: 'https://github.com/username/repository.git'
            }
        }

        stage('Build') {
            steps {
                script {
                    docker.image('shippingdocker/php-composer:7.4').inside('-u root') {
                        sh 'rm -f composer.lock'
                        sh 'composer install'
                    }
                }
            }
        }

        stage('Testing') {
            steps {
                script {
                    docker.image('ubuntu').inside('-u root') {
                        sh 'echo "Ini adalah test"'
                    }
                }
            }
        }
    }
}
