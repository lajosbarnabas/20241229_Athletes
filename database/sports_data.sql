
BEGIN TRANSACTION;
-- Tábla létrehozása
DROP TABLE IF EXISTS "athletes";
CREATE TABLE IF NOT EXISTS "athletes" (
    "id" INTEGER PRIMARY KEY,
    "name" TEXT,
    "age" INTEGER,
    "sport" TEXT,
    "country" TEXT
	"created_at"	TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	"updated_at"	TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
);

DROP TABLE IF EXISTS "categories";
CREATE TABLE "categories" (
	"id"	INTEGER,
	"name"	TEXT NOT NULL UNIQUE,
	"created_at"	DATETIME DEFAULT CURRENT_TIMESTAMP,
	"updated_at"	DATETIME DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY("id" AUTOINCREMENT)
);

INSERT INTO "categories" VALUES (1,'Swimming','2024-12-29 20:00:40','2024-12-29 20:00:40');
INSERT INTO "categories" VALUES (2,'Athletics','2024-12-29 20:00:40','2024-12-29 20:00:40');
INSERT INTO "categories" VALUES (3,'Basketball','2024-12-29 20:00:40','2024-12-29 20:00:40');
INSERT INTO "categories" VALUES (4,'Childrens Book','2024-12-29 20:00:40','2024-12-29 20:00:40');
INSERT INTO "categories" VALUES (5,'Football','2024-12-29 20:00:40','2024-12-29 20:00:40');

-- Adatok beszúrása
INSERT INTO "athletes" VALUES (1, 'John Smith', 27, 'Swimming', 'Australia','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (2, 'Emma Johnson', 21, 'Athletics', 'Australia','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (3, 'James Williams', 35, 'Athletics', 'UK','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (4, 'Sophia Brown', 29, 'Athletics', 'Netherlands','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (5, 'Michael Jones', 26, 'Basketball', 'Australia','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (6, 'Olivia Davis', 24, 'Basketball', 'Australia','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (7, 'William Miller', 25, 'Swimming', 'Netherlands','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (8, 'Isabella Garcia', 20, 'Athletics', 'France','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (9, 'Alexander Martinez', 20, 'Basketball', 'Spain','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (10, 'Charlotte Wilson', 31, 'Football', 'Spain','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (11, 'Benjamin Anderson', 34, 'Athletics', 'Spain','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (12, 'Amelia Thomas', 34, 'Basketball', 'Sweden','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (13, 'Lucas Moore', 27, 'Basketball', 'Sweden','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (14, 'Mia Taylor', 34, 'Football', 'Spain','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (15, 'Ethan Lee', 24, 'Football', 'Canada','2024-12-29 20:00:50','2024-12-29 20:00:50');
INSERT INTO "athletes" VALUES (16, 'Ava Harris', 25, 'Athletics', 'Spain','2024-12-29 20:00:50','2024-12-29 20:00:50');


COMMIT;