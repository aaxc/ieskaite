## 📁 Projekta struktūra

```
project/
│
├── index.php
├── .env
│
├── app/
│   ├── Core/
│   │   ├── Env.php
│   │   ├── Database.php
│   │   └── Controller.php
│   │
│   ├── Controllers/
│   │   └── IndexController.php
│   │
│   ├── Views/
│   │   └── home.php
│   │
│   └── Index.php
│
└── public/
    └── css/
        └── style.css
```

---

## ⚙️ Instalēšana un palaišana

### 1. Klonējam (https://github.com/aaxc/ieskaite) vai izveidojam mapi no zip arhīva

```bash
git clone https://github.com/aaxc/ieskaite DarbsNr3_DAAB
cd DarbsNr3_DAAB
```

### 2. Pārliecināmies, ka ir instalēts PHP 8.4  un MySQL

```bash
php --version
mysql --version
```

---

### 3. Sagatavo vides konfigurāciju

Kopējam failu `.env.example` un pārdēvē to uz `.env`:

```bash
cp .env.example .env
```

Atveram failu `.env` un ievadam savus datubāzes iestatījumus:

```bash
DB_HOST=127.0.0.1
DB_USER=root
DB_PASS=<tava parole>
DB_NAME=<tava datubāze>
```

---

### 3. Palaid PHP iebūvēto serveri

```bash
php -S localhost:8000
```

---

### 4. Atver pārlūkā

```
http://localhost:8000
```

---

## 📚 Papildus informācija

- Projekts neizmanto ārējās bibliotēkas.
- `.env` tiek nolasīts ar `Env` klasi.
- Savienojums ar MySQL tiek pārvaldīts ar `Database` klasi.
- Skati tiek glabāti mapē `app/Views/`.

---

Autors: Dainis Ābols
