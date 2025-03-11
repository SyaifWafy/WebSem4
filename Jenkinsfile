pipeline {
    agent any

    environment {
        PROD_HOST = '103.109.209.254' // Ganti dengan IP VPS tujuan
    }

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

        stage('Deploy to Production') {
            when {
                expression { env.BRANCH_NAME == 'master' }
            }
            steps {
                script {
                    docker.image('agung3wi/alpine-rsync:1.1').inside('-u root') {
                        sshagent(credentials: ['ssh-prod']) {
                            sh 'mkdir -p ~/.ssh'
                            sh 'ssh-keyscan -H "$PROD_HOST" > ~/.ssh/known_hosts'
                            sh '''
                                rsync -rav --delete ./laravel/ \
                                ubuntu@$PROD_HOST:/home/ubuntu/prod.kelasdevops.xyz/ \
                                --exclude=.env --exclude=storage --exclude=.git
                            '''
                        }
                    }
                }
            }
        }
    }
}
