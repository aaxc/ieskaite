## 📁 Projekta struktūra

```
DarbsNr3_DAAB/
│
├── app/                           
│   │
│   ├── Core/                      # Pamatfunkcijas un sistēmas kodols
│   │   ├── Controller.php         # Bāzes kontroliera klase
│   │   ├── Database.php           # Datubāzes savienojuma klase
│   │   ├── Env.php                # .env faila nolasīšana vides mainīgumos
│   │
│   ├── Controllers/               
│   │   └── IndexController.php    # Sākumlapas kontrolieris
│   │
│   ├── Components/                # Lietotnes atkārtoti izmantojami moduļi
│   │   ├── Content.php            # Satura komponentes apstrāde
│   │   └── Menu.php               # Darbinieku izvēlnes ģenerēšana (ar menu() helper funkciju)
│   │
│   ├── Entities/                  
│   │   └── Person.php             # Darbinieka datu modelis (personas entītija)
│   │
│   ├── Repositories/              
│   │   └── PersonRepository.php   # Datu vaicājumi `personas` tabulai
│   │
│   ├── Validators/                
│   │   └── Validator.php          # Bāzes validācijas klase
│   │
│   ├── Views/                     # Skatu (HTML) šabloni
│   │   ├── index.php              # Galvenā satura skats (parāda aprakstu)
│   │   └── partials/              # Kopīgi izmantoti skatu elementi
│   │       ├── head.php           # <head> sadaļa ar meta un stila saitēm
│   │       ├── menu.php           # Izvēlne
│   │       └── footer.php         # Lapaspuses footer
│   │
│   └── Index.php                  # Lietotnes inicializācijas fails
│
├── ieskaite_Nr3.php               # Galvenais ieejas punkts (autoloader + app palaišana)
├── style.css                      # Galvenais stila fails
├── .env                           # Lokālie vides mainīgie (netiek glabāts repo)
└── .env.example                   # Parauga vides konfigurācijas fails
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
