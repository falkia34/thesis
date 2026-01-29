# Capability: BAB I Latar Belakang (Refinement)

## Purpose

Defines requirements for the Latar Belakang (Background) section of BAB I, specifically the refined LEAF architecture description that removes Blackboard as core pattern and establishes orchestrator as an agent type with built-in patterns.

## Requirements

### Requirement: Update architecture to revised model

The Latar Belakang section SHALL update LEAF architecture description to reflect:

- Orchestrator as an agent type (not separate concept)
- Built-in orchestration patterns: supervisor (default), sequential, parallel
- Remove Blackboard as core architecture (can be mentioned as extensible pattern)
- 4-layer hierarchy: Orchestrator → Processor → Sensor/Executor
- Tools model: sensor capabilities (read-only) vs executor capabilities (mutate), enforcement at agent layer

#### Scenario: Blackboard removal

- **WHEN** architecture paragraph is updated
- **THEN** Blackboard reference is removed and replaced with built-in orchestration patterns

#### Scenario: Orchestrator as agent

- **WHEN** taxonomy is described
- **THEN** Orchestrator is presented as an agent type that coordinates other agents

### Requirement: Condense architecture details with forward references

The Latar Belakang section SHALL condense detailed architecture descriptions (Opinionated Grid, 4-layer taxonomy, orchestration patterns) to 1-2 sentences each with forward references to BAB II.

#### Scenario: Grid architecture condensation

- **WHEN** Opinionated Grid is mentioned
- **THEN** it is described briefly with "dijelaskan lebih lanjut pada Bab II" or similar forward reference

### Requirement: Preserve narrative flow

The refinement SHALL NOT remove paragraphs or significantly restructure the existing narrative flow.

#### Scenario: Minimal disruption

- **WHEN** refinement is applied
- **THEN** the logical progression (observability → AIOps → standards → gap → LEAF) remains intact

### Requirement: Keep all citations except Blackboard-specific

Existing citations SHALL be preserved except those solely supporting Blackboard pattern (Corkill_1991_Blackboard may be removed or repurposed).

#### Scenario: Citation adjustment

- **WHEN** refinement is complete
- **THEN** citations remain relevant to updated architecture description

### Requirement: Progressive complexity model brief mention

The 3-level progressive complexity model SHALL remain but MAY be condensed to a summary sentence with forward reference.

#### Scenario: Level description

- **WHEN** progressive model is described
- **THEN** it mentions Level 1-3 briefly without extensive explanation

### Requirement: Research contribution focus

The final paragraphs SHALL emphasize the research contribution (first low-code agentic framework) and thesis scope (Kubernetes/SRE validation).

#### Scenario: Contribution clarity

- **WHEN** the section concludes
- **THEN** the unique contribution and scope are clearly stated
