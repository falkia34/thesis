# Capability: Thesis Background - Literature Review

## Purpose

Defines requirements for the literature review portion of the thesis background (Latar Belakang), covering observability evolution, AIOps state of the art, agentic frameworks landscape, multi-agent systems theory, and research gap identification.

## Requirements

### Requirement: Observability Evolution Narrative

The background SHALL present a chronological narrative of observability evolution in cloud-native systems, covering the progression from traditional monitoring to modern unified observability.

#### Scenario: Three Pillars Introduction

- **WHEN** the reader reaches the observability section
- **THEN** the text SHALL explain the three pillars (metrics, logs, traces) with clear definitions and their individual limitations

#### Scenario: Unified Observability Context

- **WHEN** discussing modern observability
- **THEN** the text SHALL explain how Kubernetes and microservices architectures created the need for correlated, unified observability beyond individual pillars

### Requirement: AIOps State of the Art

The background SHALL present current AIOps solutions and their fundamental limitations, establishing why existing approaches are insufficient.

#### Scenario: AIOps Definition and Scope

- **WHEN** introducing AIOps
- **THEN** the text SHALL define AIOps (Artificial Intelligence for IT Operations) and list major commercial solutions (Datadog, Dynatrace, Splunk AIOps, etc.) with their general capabilities

#### Scenario: Monolithic Architecture Limitation

- **WHEN** discussing AIOps limitations
- **THEN** the text SHALL explain how current AIOps solutions are monolithic — tightly coupling data ingestion, analysis, and action within single vendor platforms

#### Scenario: Vendor Lock-in Problem

- **WHEN** discussing interoperability
- **THEN** the text SHALL explain how organizations cannot combine best-of-breed AI agents from different vendors due to lack of standardized communication protocols

#### Scenario: No Agent Coordination Standard

- **WHEN** presenting the core limitation
- **THEN** the text SHALL explain that while MCP and A2A standards have emerged and are adopted by frameworks like Google ADK and LangChain, these solutions still require significant programming expertise

### Requirement: Current Agentic Frameworks Landscape

The background SHALL present current agentic frameworks that have adopted MCP/A2A standards, establishing what exists before identifying the gap.

#### Scenario: Framework Survey

- **WHEN** discussing current solutions
- **THEN** the text SHALL mention frameworks adopting standards: Google ADK (A2A), LangChain (MCP), CrewAI, and similar — noting they support protocol interoperability

#### Scenario: Programming Expertise Requirement

- **WHEN** analyzing these frameworks
- **THEN** the text SHALL explain that all require: understanding SDK patterns, writing agent classes in Python/JavaScript, implementing tool bindings, managing coordination logic — all in code

### Requirement: Multi-Agent Systems Foundation

The background SHALL introduce multi-agent systems (MAS) theory as the theoretical foundation for the proposed solution.

#### Scenario: MAS Definition

- **WHEN** introducing multi-agent concepts
- **THEN** the text SHALL define autonomous agents and multi-agent systems with citations to foundational literature (Wooldridge, Jennings)

#### Scenario: Coordination Mechanisms

- **WHEN** discussing agent coordination
- **THEN** the text SHALL explain relevant coordination paradigms: blackboard systems, contract nets, and hierarchical task decomposition

### Requirement: Research Gap Identification

The background SHALL clearly articulate the specific research gap this thesis addresses — the **accessibility barrier** in current agentic frameworks.

#### Scenario: Gap Statement

- **WHEN** concluding the literature synthesis
- **THEN** the text SHALL state: while standardized protocols (MCP, A2A) exist and are adopted by modern frameworks, building agentic applications still requires significant programming expertise — excluding domain experts who understand their workflows but lack coding skills

#### Scenario: Gap Justification

- **WHEN** presenting the gap
- **THEN** the text SHALL cite specific evidence: (1) all major agentic frameworks require Python/JavaScript programming, (2) no declarative/low-code agentic framework exists with standards-based extensibility, (3) domain experts (SREs, operators) cannot build agentic apps without becoming developers

#### Scenario: False Choice Problem

- **WHEN** explaining the gap
- **THEN** the text SHALL articulate the current false choice: either accept limitations of simple no-code tools, or commit to full programming expertise — no framework offers declarative simplicity with standards-based extensibility

### Requirement: Citation Coverage

The background literature section SHALL include citations covering all major topic areas.

#### Scenario: Minimum Citation Count

- **WHEN** the section is complete
- **THEN** there SHALL be at least 15 distinct citations with minimum coverage: 3 on SRE/observability, 3 on AIOps, 3 on multi-agent systems, 2 on MCP/A2A protocols, 2 on current agentic frameworks, 2 on declarative configuration paradigms (Kubernetes, IaC)

#### Scenario: Recency Requirement

- **WHEN** selecting citations
- **THEN** at least 60% of citations SHALL be from 2020 or later, with foundational works (pre-2020) explicitly justified
