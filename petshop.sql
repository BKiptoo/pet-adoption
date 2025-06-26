CREATE TABLE "users" (
  "id" bigint PRIMARY KEY,
  "name" varchar(255),
  "email" varchar(255) UNIQUE,
  "phone" varchar(20),
  "password" varchar(255),
  "role" enum(admin,user) DEFAULT 'user',
  "email_verified_at" timestamp,
  "created_at" timestamp,
  "updated_at" timestamp
);

CREATE TABLE "pets" (
  "id" bigint PRIMARY KEY,
  "name" varchar(255),
  "species" varchar(100),
  "breed" varchar(100),
  "gender" enum(male,female,unknown),
  "age" integer,
  "description" text,
  "photo_url" varchar(255),
  "available" boolean DEFAULT true,
  "shelter_id" bigint,
  "created_at" timestamp,
  "updated_at" timestamp
);

CREATE TABLE "adoption_applications" (
  "id" bigint PRIMARY KEY,
  "user_id" bigint,
  "pet_id" bigint,
  "status" enum(pending,approved,rejected) DEFAULT 'pending',
  "reason" text,
  "application_note" text,
  "created_at" timestamp,
  "updated_at" timestamp
);

CREATE TABLE "payments" (
  "id" bigint PRIMARY KEY,
  "user_id" bigint,
  "application_id" bigint,
  "amount" decimal(10,2),
  "transaction_id" varchar(255) UNIQUE,
  "status" enum(success,failed,pending) DEFAULT 'pending',
  "phone_number" varchar(20),
  "paid_at" timestamp,
  "created_at" timestamp,
  "updated_at" timestamp
);

CREATE TABLE "pet_photos" (
  "id" bigint PRIMARY KEY,
  "pet_id" bigint,
  "photo_url" varchar(255),
  "created_at" timestamp,
  "updated_at" timestamp
);

ALTER TABLE "users" ADD FOREIGN KEY ("id") REFERENCES "pets" ("shelter_id");

ALTER TABLE "users" ADD FOREIGN KEY ("id") REFERENCES "adoption_applications" ("user_id");

ALTER TABLE "pets" ADD FOREIGN KEY ("id") REFERENCES "adoption_applications" ("pet_id");

ALTER TABLE "users" ADD FOREIGN KEY ("id") REFERENCES "payments" ("user_id");

ALTER TABLE "adoption_applications" ADD FOREIGN KEY ("id") REFERENCES "payments" ("application_id");

ALTER TABLE "pets" ADD FOREIGN KEY ("id") REFERENCES "pet_photos" ("pet_id");
