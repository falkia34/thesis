# Capability: BAB I Batasan Masalah

## Purpose

Defines requirements for the Batasan Masalah (Problem Boundaries) section of BAB I, narrowing the 5 identified problems to 4 bounded problems with explicit justifications.

## Requirements

### Requirement: Scope boundary definition

The Batasan Masalah section SHALL narrow the 5 identified problems to 4 bounded problems with explicit justification for what is excluded and why.

#### Scenario: Explicit exclusion with rationale

- **WHEN** scope boundaries are defined
- **THEN** the excluded problem (general observability complexity) is mentioned with reason (already addressed by existing tools)

### Requirement: Four bounded problems

The section SHALL define boundaries for:

1. Focus on agentic approach for AIOps rather than traditional ML pipelines
2. Low-code declarative manifests as primary interface (not full no-code GUI)
3. Kubernetes/SRE observability as validation domain (not general-purpose agents)
4. MCP/A2A protocols for extensibility (not proprietary integrations)

#### Scenario: Bounded problem completeness

- **WHEN** all four boundaries are stated
- **THEN** they map to three research questions in Rumusan Masalah

### Requirement: Methodological justification

Each boundary SHALL include brief justification considering: feasibility, time constraints, or methodological focus.

#### Scenario: Justified constraints

- **WHEN** SRE/Kubernetes scope is defined
- **THEN** justification mentions "studi kasus implementasi" or similar D4 thesis scope language

### Requirement: Numbered list format

Boundaries SHALL be presented as numbered list with 1-2 sentences each.

#### Scenario: Format compliance

- **WHEN** the section is formatted
- **THEN** it uses \begin{enumerate} with \item entries
