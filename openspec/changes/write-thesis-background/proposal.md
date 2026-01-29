## Why

Current Site Reliability Engineering (SRE) practices face a critical challenge: the observability tooling landscape is fragmented, requiring engineers to manually correlate data across multiple systems (metrics, logs, traces) during incident response. While standardized protocols for AI agent communication have emerged—Model Context Protocol (MCP) for tool integration and Agent-to-Agent (A2A) for inter-agent coordination—frameworks adopting these standards (Google ADK, LangChain, CrewAI) still require **significant programming expertise** to use effectively.

**The Accessibility Gap**: Building an agentic application today requires understanding SDK patterns, writing agent classes in Python or JavaScript, implementing tool bindings, and managing complex coordination logic—all in code. This creates a barrier where **only software developers can harness multi-agent AI systems**, excluding domain experts such as SRE practitioners, data analysts, and operations teams who understand their workflows but lack programming skills.

**LEAF's Contribution**: This thesis proposes **LEAF (Low-code Extensible Agentic Framework)** — a **declarative, Kubernetes-style framework** where users define multi-agent systems through human-readable YAML/JSON manifests. The framework automatically bootstraps agents, wires MCP/A2A protocols, and handles coordination. LEAF combines **accessibility** (no coding required for common use cases) with **extensibility** (standards-based escape hatch for custom implementations).

**The Progressive Complexity Model**:

- **Level 1 (Pure Declarative)**: Domain experts define agents entirely in YAML, reference community MCP tools, zero code required
- **Level 2 (Declarative + References)**: YAML manifests reference external A2A agents or custom MCP servers
- **Level 3 (Custom Implementation)**: Developers write custom agents using LEAF SDK, seamlessly interoperating via A2A/MCP

**Thesis Scope**: While LEAF is architecturally designed as a general framework applicable to any domain requiring multi-agent coordination (e.g., software development, data pipelines, business automation), this thesis specifically focuses on **Kubernetes observability and SRE operations** as the implementation case study.

## What Changes

- **Add comprehensive background chapter** (`contents/b1-bab1.tex`) covering:
  - Evolution of observability in cloud-native systems (metrics → logs → traces → unified observability)
  - Current state of AIOps and its limitations (monolithic, vendor-locked)
  - Emergence of AI agent protocols: Model Context Protocol (MCP) and Agent-to-Agent (A2A)
  - Current agentic frameworks landscape (Google ADK, LangChain, CrewAI) and their adoption of standards
  - **Research gap: accessibility barrier** — existing frameworks require programming expertise despite having standardized protocols
  - The LEAF framework proposition: **low-code + standardized extensibility**

- **Structure the literature review** to establish theoretical foundations:
  - Site Reliability Engineering principles and practices
  - Kubernetes observability patterns and challenges
  - Multi-agent systems theory and coordination mechanisms
  - Human-in-the-loop (HITL) requirements for autonomous systems
  - Declarative configuration paradigms (Kubernetes-style infrastructure-as-code)

## Capabilities

### New Capabilities

- `thesis-background-literature`: Comprehensive literature review connecting SRE, observability, AIOps, multi-agent systems, and **declarative configuration paradigms** — establishing the theoretical foundation and identifying the **accessibility gap** in current agentic frameworks
- `thesis-background-framework`: Introduction of the LEAF framework architecture covering the **declarative manifest system**, Opinionated Grid concept, 4-layer taxonomy, Blackboard pattern, protocol specifications, and **progressive complexity model**

### Modified Capabilities

_(None — this is new content for the thesis)_

## Impact

- **Files affected**:
  - `contents/b1-bab1.tex` — Complete rewrite of Latar Belakang (Background) section
  - `contents/a7-pustaka.bib` — New bibliography entries for cited literature
- **Dependencies**: Requires research into current MCP/A2A specifications, existing agentic frameworks (Google ADK, LangChain, CrewAI), recent AIOps literature (2023-2025), Kubernetes observability best practices, and declarative configuration paradigms
- **Scope**: Chapter 1 (Pendahuluan) background section, approximately 2000-3000 words in Indonesian academic style
- **Research Gap Framing**: The background should establish that while MCP/A2A standards exist and are adopted by frameworks, the **accessibility barrier** (requiring programming expertise) remains unsolved — positioning LEAF as the first **low-code agentic framework with standards-based extensibility**
