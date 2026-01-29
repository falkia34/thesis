# Capability: BAB I Tujuan Penelitian

## Purpose

Defines requirements for the Tujuan Penelitian (Research Objectives) section of BAB I, stating 3 objectives that correspond 1:1 with the research questions.

## Requirements

### Requirement: One-to-one mapping with research questions

The Tujuan Penelitian section SHALL state exactly 3 objectives, each corresponding directly to one research question in Rumusan Masalah.

#### Scenario: Objective-question alignment

- **WHEN** objective 1 is reviewed
- **THEN** it directly answers RQ1 about architecture design

### Requirement: Three research objectives

The section SHALL state:

1. Merancang arsitektur framework agentik low-code berbasis protokol MCP/A2A (design architecture)
2. Menyusun spesifikasi format manifes deklaratif untuk definisi agen (specify manifest format)
3. Mengimplementasikan dan memvalidasi framework pada domain observabilitas Kubernetes/SRE (implement and validate)

#### Scenario: Verb-objective structure

- **WHEN** objectives are written
- **THEN** each begins with action verb (merancang, menyusun, mengimplementasikan)

### Requirement: Declarative statement format

Objectives SHALL be written as declarative statements (not questions) using infinitive verbs.

#### Scenario: Statement format compliance

- **WHEN** objectives are formatted
- **THEN** they do NOT end with question marks and use "Untuk..." or direct verb structure

### Requirement: Numbered list format

Objectives SHALL be presented as numbered list matching the research question numbers.

#### Scenario: Number correspondence

- **WHEN** objective numbering is checked
- **THEN** objective N corresponds to research question N
