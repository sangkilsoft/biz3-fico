﻿--
-- PostgreSQL database dump
--

-- Dumped from database version 9.1.15
-- Dumped by pg_dump version 9.1.15
-- Started on 2015-04-17 13:12:13 WIB

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

--
-- TOC entry 2106 (class 0 OID 28907)
-- Dependencies: 172 2128
-- Data for Name: coa; Type: TABLE DATA; Schema: public; Owner: mdmunir
--

INSERT INTO coa VALUES (1, NULL, '100000', 'AKTIVA', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (2, NULL, '200000', 'KEWAJIBAN', 'K', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (3, NULL, '300000', 'MODAL', 'K', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (4, NULL, '400000', 'PENDAPATAN', 'K', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (5, NULL, '500000', 'HARGA POKOK PENJUALAN', 'K', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (6, NULL, '600000', 'BIAYA', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (7, 1, '110000', 'AKTIVA LANCAR', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (8, 1, '120000', 'AKTIVA TETAP', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (9, 7, '110001', 'Kas Kecil', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (10, 7, '110002', 'Bank BNI64', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (11, 7, '110003', 'Piutang Dagang', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (12, 7, '110004', 'Persediaan Barang Dagang', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (13, 7, '110005', 'Kas Lain', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (14, 8, '121000', 'Tanah Kapling A', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (15, 8, '122000', 'Ruko Jl.Sudirman 45', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (16, 2, '210000', 'HUTANG LANCAR', 'K', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (24, 6, '620001', 'Beban Adm & Umum', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (17, 2, '220000', 'HUTANG JANGKA PANJANG', 'K', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (18, 16, '210001', 'Hutang Dagang', 'K', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (19, 16, '210002', 'Hutang Gaji', 'K', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (20, 3, '310000', 'MODAL', 'K', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (21, 20, '310001', 'Modal Pemilik', 'K', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (22, 5, '510000', 'HPP', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);
INSERT INTO coa VALUES (23, 6, '610001', 'Beban Gaji/ Upah', 'D', '2014-12-18 08:23:33', NULL, '2014-12-18 08:23:33', NULL);

