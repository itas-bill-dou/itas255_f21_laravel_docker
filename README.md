# Lab2 - Laravel Blog

Bill.Dou@itas.ca \
Oct 1, 2021

## Usage

Download lab2 in your workspace
```
git pull
```
Copy whole lab2 files into your local private repo: lab2

```
cd lab2
docker-composer up -d --build
```

Then run the following command in workspace container

```
cp .env.example .env
php artisan key:generate
npm install
```

Open http://localhost:8020/


Done.