# Capability: Thesis Background - Framework Introduction

## Purpose

Defines requirements for introducing the LEAF framework in the thesis background (Latar Belakang), covering its core concepts, architectural patterns, and positioning as a research contribution.

## Requirements

### Requirement: LEAF Framework Introduction

The background SHALL introduce LEAF (Low-code Extensible Agentic Framework) as the thesis contribution, presenting its core concept and value proposition centered on **accessibility through declarative design**.

#### Scenario: Framework Name and Acronym

- **WHEN** introducing the proposed solution
- **THEN** the text SHALL introduce "LEAF: Low-code Extensible Agentic Framework" with explanation of each component of the acronym, emphasizing **"Low-code" as the primary differentiator** and its **general-purpose, domain-agnostic** design

#### Scenario: Value Proposition Statement

- **WHEN** presenting LEAF
- **THEN** the text SHALL clearly state LEAF's dual value: (1) **accessibility** — domain experts can build agentic apps through YAML/JSON manifests without programming, and (2) **extensibility** — standards-based escape hatch (MCP/A2A) for custom implementations when needed

#### Scenario: Kubernetes Analogy

- **WHEN** explaining the declarative approach
- **THEN** the text SHALL draw analogy to Kubernetes: just as K8s abstracted infrastructure management through declarative YAML, LEAF abstracts agentic app development through declarative manifests

#### Scenario: Thesis Scope Clarification

- **WHEN** presenting LEAF in thesis context
- **THEN** the text SHALL clarify that while LEAF is a **general-purpose framework**, this thesis specifically focuses on **Kubernetes observability and SRE operations** as the implementation case study to validate the framework's core patterns

### Requirement: Opinionated Grid Concept

The background SHALL explain the "Opinionated Grid" architectural pattern as LEAF's core design principle.

#### Scenario: Reasoning-Plumbing Decoupling

- **WHEN** explaining the Opinionated Grid
- **THEN** the text SHALL explain the fundamental principle: decoupling AI reasoning from infrastructure plumbing through standardized communication protocols

#### Scenario: Three Protocol Directions

- **WHEN** detailing the grid structure
- **THEN** the text SHALL describe the three communication directions:
  - Southbound (Data): MCP for environmental context queries
  - Northbound (Interface): A2A for user-facing agent communication
  - East-West (Internal): A2A for inter-agent coordination

### Requirement: Progressive Complexity Model

The background SHALL present LEAF's progressive complexity model that enables users to start simple and grow as needed.

#### Scenario: Three Levels Introduction

- **WHEN** explaining user journey
- **THEN** the text SHALL describe three levels of engagement:
  - Level 1 (Pure Declarative): Define agents entirely in YAML, reference community MCP tools, zero code required
  - Level 2 (Declarative + References): YAML manifests reference external A2A agents or custom MCP servers
  - Level 3 (Custom Implementation): Developers write custom agents using LEAF SDK, interoperating via A2A/MCP

#### Scenario: Standards as Escape Hatch

- **WHEN** explaining extensibility
- **THEN** the text SHALL emphasize that MCP/A2A standards serve as the "escape hatch" — enabling low-code simplicity without becoming a limiting cage

### Requirement: Protocol Specifications Overview

The background SHALL introduce MCP and A2A protocols as the enabling technologies for LEAF.

#### Scenario: MCP Introduction

- **WHEN** describing MCP
- **THEN** the text SHALL explain Model Context Protocol as a standard for agents to query environmental context (Kubernetes, Prometheus, logs) without direct API calls

#### Scenario: A2A Introduction

- **WHEN** describing A2A
- **THEN** the text SHALL explain Agent-to-Agent protocol as a standard for structured task exchange between heterogeneous agents regardless of their implementation SDK

### Requirement: Four-Layer Taxonomy Overview

The background SHALL present LEAF's functional agent taxonomy for separation of concerns.

#### Scenario: Layer Enumeration

- **WHEN** describing agent organization
- **THEN** the text SHALL enumerate four layers: Orchestrator (planning), Sensor (data gathering), Processor (analysis), Executor (action implementation)

#### Scenario: Layer Responsibilities

- **WHEN** explaining each layer
- **THEN** the text SHALL briefly describe each layer's role in the incident response lifecycle without implementation details

### Requirement: Blackboard Pattern Introduction

The background SHALL introduce the Blackboard state store as LEAF's coordination mechanism.

**Note:** This requirement was superseded by architecture revision in `write-thesis-bab1-complete`. Blackboard is now optional/custom, not a core pattern. Built-in orchestrators (supervisor, sequential, parallel) replace this as the default coordination mechanism.

#### Scenario: Context Bloat Problem

- **WHEN** motivating the Blackboard
- **THEN** the text SHALL explain the context bloat problem: passing raw data between agents causes token overflow and inefficiency

#### Scenario: State Pointer Solution

- **WHEN** describing the Blackboard solution
- **THEN** the text SHALL explain agents pass state pointers (URIs) to a centralized versioned store rather than raw data

### Requirement: Human-in-the-Loop Emphasis

The background SHALL emphasize LEAF's commitment to human oversight as a core design principle.

#### Scenario: HITL Requirement Statement

- **WHEN** discussing safety
- **THEN** the text SHALL state that all Executor actions (system modifications) require explicit human approval

#### Scenario: Verification Loop Mention

- **WHEN** describing safeguards
- **THEN** the text SHALL mention the Reflector agent pattern for independent verification of findings before action

### Requirement: Research Contribution Positioning

The background SHALL position LEAF as a **low-code architectural contribution** that solves the accessibility gap.

#### Scenario: Blueprint vs Implementation

- **WHEN** clarifying scope
- **THEN** the text SHALL clarify that LEAF includes: (1) an architectural blueprint, (2) a declarative manifest specification (JSON Schema), and (3) a reference implementation — not just theory

#### Scenario: Contribution Statement

- **WHEN** concluding the framework introduction
- **THEN** the text SHALL state the research contribution: the first **low-code agentic framework** that combines declarative manifest-driven design with standards-based extensibility (MCP/A2A), enabling domain experts to build multi-agent systems without programming while preserving escape hatches for advanced customization — **demonstrated through SRE/observability use case** in this thesis
