pipeline {
    agent any

    stages {
        stage('Check Branch') {
            when {
                expression { env.BRANCH_NAME == 'master' }
            }
            steps {
                echo 'Branch saat ini adalah master, lanjutkan pipeline...'
            }
        }

        stage('Build') {
            when {
                expression { env.BRANCH_NAME == 'master' }
            }
            steps {
                echo 'Building project...'
                // Tambahkan perintah build di sini, misalnya:
                // sh 'mvn clean package'
            }
        }

        stage('Test') {
            when {
                expression { env.BRANCH_NAME == 'master' }
            }
            steps {
                echo 'Running tests...'
                // Tambahkan perintah test, misalnya:
                // sh 'mvn test'
            }
        }

        stage('Deploy') {
            when {
                expression { env.BRANCH_NAME == 'master' }
            }
            steps {
                echo 'Deploying to production...'
                // Tambahkan perintah deploy di sini
            }
        }
    }
}
