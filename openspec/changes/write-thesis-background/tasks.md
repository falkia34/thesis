## 1. Literature Research & Bibliography

- [ ] 1.1 Research and collect SRE/observability foundational sources (Beyer et al. SRE book, observability papers)
- [ ] 1.2 Research current AIOps solutions and their limitations (Datadog, Dynatrace, Splunk documentation and case studies)
- [ ] 1.3 Research multi-agent systems literature (Wooldridge, Jennings, coordination mechanisms)
- [ ] 1.4 Research MCP specification (Anthropic documentation, GitHub repos)
- [ ] 1.5 Research A2A protocol specification (Google documentation, implementation examples)
- [ ] 1.6 Research current agentic frameworks: Google ADK, LangChain, CrewAI — document their MCP/A2A adoption and programming requirements
- [ ] 1.7 Research declarative configuration paradigms (Kubernetes manifests, Infrastructure-as-Code concepts)
- [ ] 1.8 Create BibTeX entries in `contents/a7-pustaka.bib` for all collected sources (minimum 15 entries)

## 2. Literature Review Section (thesis-background-literature)

- [ ] 2.1 Write observability evolution narrative: traditional monitoring → three pillars → unified observability
- [ ] 2.2 Write Kubernetes/microservices complexity context requiring correlated observability
- [ ] 2.3 Write AIOps definition and current solutions overview (Datadog, Dynatrace, Splunk)
- [ ] 2.4 Write MCP/A2A standards emergence and their significance for agent interoperability
- [ ] 2.5 Write current agentic frameworks landscape: Google ADK, LangChain, CrewAI — acknowledging their standards adoption
- [ ] 2.6 Write multi-agent systems foundation: MAS definition, autonomous agents, coordination paradigms
- [ ] 2.7 Write **accessibility gap** statement: all frameworks require programming expertise (Python/JS SDK patterns, agent classes, tool bindings)
- [ ] 2.8 Write the false choice problem: simple no-code tools vs full programming expertise — no middle ground

## 3. Framework Introduction Section (thesis-background-framework)

- [ ] 3.1 Write LEAF acronym introduction, emphasizing **"Low-code" as primary differentiator** and general-purpose design
- [ ] 3.2 Write Kubernetes analogy: just as K8s abstracted infrastructure through YAML, LEAF abstracts agentic apps through declarative manifests
- [ ] 3.3 Write **progressive complexity model**: Level 1 (pure YAML) → Level 2 (YAML + references) → Level 3 (custom code with SDK)
- [ ] 3.4 Write standards as escape hatch: MCP/A2A enable extensibility without becoming a limiting cage
- [ ] 3.5 Write thesis scope clarification: LEAF is general framework, thesis validates through SRE/observability case study
- [ ] 3.6 Write Opinionated Grid concept: reasoning-plumbing decoupling principle
- [ ] 3.7 Write three protocol directions: Southbound (MCP), Northbound (A2A), East-West (A2A)
- [ ] 3.8 Write four-layer taxonomy overview: Orchestrator, Sensor, Processor, Executor
- [ ] 3.9 Write Blackboard pattern introduction: context bloat problem and state pointer solution
- [ ] 3.10 Write human-in-the-loop emphasis: HITL requirement, Reflector verification
- [ ] 3.11 Write research contribution positioning: **first low-code agentic framework** combining declarative design with standards-based extensibility

## 4. LaTeX Integration

- [ ] 4.1 Structure content in `contents/b1-bab1.tex` replacing placeholder Latar Belakang section
- [ ] 4.2 Add all `\cite{}` references throughout the text
- [ ] 4.3 Ensure Indonesian academic writing style and UNY format compliance
- [ ] 4.4 Compile LaTeX document and verify citations render correctly
- [ ] 4.5 Review word count (target: 2500-3000 words) and adjust if needed

## 5. Verification

- [ ] 5.1 Verify all specs requirements are addressed in the written content
- [ ] 5.2 Verify minimum 15 citations with 60% from 2020 or later
- [ ] 5.3 Verify narrative flow: Problem → Evolution → Standards → Frameworks → **Accessibility Gap** → LEAF Solution
- [ ] 5.4 Verify LEAF presented as **low-code first**, with progressive complexity model clearly explained
- [ ] 5.5 Verify existing frameworks (Google ADK, LangChain, CrewAI) are acknowledged, not dismissed
- [ ] 5.6 Proofread for Indonesian grammar and academic tone consistency
